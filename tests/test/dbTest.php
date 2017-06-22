<?php
use PHPUnit\Framework\TestCase; 
class FixtureTestCase extends \PHPUnit_Extensions_Database_TestCase {
    public $fixtures = array(
        'posts',
        'postmeta',
        'options'
    );
    private $conn = null;

     public function getConnection(){
        if ($this->conn === null){
            try {
                $pdo = new PDO('mysql:host=db;dbname=sildb','root','root');
                $this->conn = $this->createDefaultDBConnection($pdo, 'sildb');
            }catch (PDOException $e){
                echo $e->getMessage();
            }
        }
        return $this->conn;
    }
    
    public function getDataSet($fixtures = array()) {
    if (empty($fixtures)) {
        $fixtures = $this->fixtures;
    }
    $compositeDs = new
    PHPUnit_Extensions_Database_DataSet_CompositeDataSet(array());
    $fixturePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'fixtures';

    foreach ($fixtures as $fixture) {
        $path =  $fixturePath . DIRECTORY_SEPARATOR . "$fixture.xml";
        $ds = $this->createMySQLXMLDataSet($path);
        $compositeDs->addDataSet($ds);
    }
    return $compositeDs;
}

}
