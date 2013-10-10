<?php
namespace Acme;

/**
 * Description of MyGuestbookTest
 *
 * @author isidromerayo
 */
class MyGuestbookTest extends \PHPUnit_Extensions_Database_TestCase
{

    private $pdo;
    public function setUp() {
        $this->pdo = new \PDO('sqlite::memory:');
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, 
                              \PDO::ERRMODE_EXCEPTION);
        $this->pdo->prepare("CREATE TABLE IF NOT EXISTS 'guestbook' (id int, content text, user text, created datetime)")->execute();
        
    }
    /**
     * @return PHPUnti_Extensions_Database_DB_IDatabaseConnection
     */
    public function getConnection()
    {
        return $this->createDefaultDBConnection($this->pdo, ':memory:');
    }
    /**
     * @return PHPUnit_Extensions_Database_DataSet_IDataSet
     */
    public function getDataSet()
    {
        return $this->createFlatXMLDataSet(dirname(__FILE__).'/fixture/guestbook-seed.xml');
    }
    
    public function testNoGetDataSet() {
        // FIXME WTF!?
        $result = $this->getConnection()->getConnection()->query("SELECT * FROM guestbook")->fetchAll();
        $this->assertEquals(0, sizeof($result));
    }

}