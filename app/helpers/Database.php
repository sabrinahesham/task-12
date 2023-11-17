<?php 

 namespace App\Helpers ;
 use mysqli ;

 class Databsae {
    private $hostname = DB_HOST ;
    private $username = DB_USER;
    private $password = DB_PASSWORD;
    private $database = DB_NAME;

    private $conn ;

    public function __construct() {
        $this-> $connect() ;
    }
    public function query (string $query) {
       return $this-> conn-> query($query)
    }

    private function $connect() {
        if (!$this-> conn){
            $this-> conn = new mysqli ($this->hostname ,$this->username ,$this->password,$this->database );
        }
        if (!$this-> conn) {
            throw new Exception ("error during database connection");
        }
    }
    public function destruct(){
        $this-> conn-> close();
    }
 } 