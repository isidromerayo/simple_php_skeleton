<?php
namespace Acme;

/**
 * Description of MyGuestbookTest
 *
 * @author isidromerayo
 */
class MyGuestbookTest extends \PHPUnit_Extensions_Database_TestCase
{

    /**
     * @return PHPUnti_Extensions_Database_DB_IDatabaseConnection
     */
    public function getConnection()
    {
        $pdo = new \PDO('sqlite::memory:');
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, 
                              \PDO::ERRMODE_EXCEPTION);
        $pdo->prepare("CREATE TABLE IF NOT EXISTS 'guestbook' (id int, content text, user text, created int)")->execute();
        return $this->createDefaultDBConnection($pdo, ':memory:');
    }
    /**
     * @return PHPUnit_Extensions_Database_DataSet_IDataSet
     */
    public function getDataSet()
    {
        return $this->createFlatXMLDataSet(dirname(__FILE__).'/_files/guestbook-seed.xml');
    }
    
    public function testNoGetDataSet() {
        // FIXME WTF!?
        $result = $this->getConnection()->getConnection()->query("SELECT * FROM guestbook")->fetchAll();
        $this->assertEquals(0, sizeof($result));
    }

}