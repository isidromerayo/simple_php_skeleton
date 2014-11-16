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
        parent::setUp();
        
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
        $result = $this->getConnection()->getConnection()->query("SELECT * FROM guestbook")->fetchAll();
        $this->assertEquals(2, sizeof($result));
        $this->assertArrayHasKey('id',$result[0]);
        $this->assertArrayHasKey('content',$result[0]);
        $this->assertArrayHasKey('user',$result[0]);
        $this->assertArrayHasKey('created',$result[0]);
    }

}