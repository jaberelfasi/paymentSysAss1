<?php

class Dao{

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $connection;

    //construct
    public function __construct($host, $user, $pass, $db) {
        $this->servername = $host;
        $this->username = $user;
        $this->password = $pass;
        $this->dbname = $db;
    }

    public function getOrderDetails() {
        $this->openConnection();
        $sql =    "SELECT "
                . "companyName, contactName, "
                . "contractStartDate, "
                . "contractLenght, url, phone, "
                . "orderNumber, productCode, paymentAmount "
                . "FROM customerInfo";
        
        $stmt = $this->connection->prepare("SELECT * FROM customerInfo");
        $stmt->execute();
        //$row = $stmt->fetch(PDO::FETCH_ASSOC);
        $row = $stmt->fetchAll();
//        foreach($this->connection->query($sql) as $row){
//           echo "<br>".$row['companyName']."<br>";
//        }
        
//        echo "<pre>";
//        print_r($row);
//        echo "</pre>";
        return $row;
    }
    public function newRecord(){
        $this->openConnection();
        $sql =    "INSERT INTO customerInfo ("
                . "companyName, contactName, "
                . "contractStartDate, "
                . "contractLenght, url, phone, "
                . "orderNumber, productCode, paymentAmount) "
                . "VALUES "
                . "('eieie', 'dkdkdkd', '1-1-1111', 3, "
                . "'kdkd.ldod.kdkd', '7575757', '757575', 'NN', 756756)";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
    }
    public function openConnection() {
        $dsn = "mysql:host=" . $this->servername . ";dbname=" . $this->dbname;
        $username = $this->username;
        $password = $this->password;
        /* $options = array(
          PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
          ); */
        try {
            $this->connection = new PDO($dsn, $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "connection successful";
        } catch (PDOException $e) {
            echo "connection failed" . $e->getMessage();
        }

        /* $this->connection = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
          if($this->connection->connect_errno){
          echo "Connection failed badly. I mean really Bad!";
          die;
          } */
    }

    public function closeConnection() {
        $this->connection = null;
    }

}

$db = new Dao("localhost", "root", "addpeople", "paymentSystem");
