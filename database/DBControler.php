<?php
/************************   MySQL Connection ********************/
class DBController{
    //protect variable that can access only in the class
    //database connection properties
protected $host = 'localhost';
protected $user = 'root';
protected $password = '';
protected $database = 'shopee';

    //connection property
public $con = null;

//call constructor
public function __construct()
{
    //initialize connection property
    $this->con = mysqli_connect($this->host,$this->user,$this->password,$this->database);
    if($this->con->connect_error){
        echo "Fail".$this->con->connect_error;
    }
}

public function __destruct()
{
    $this->closeConnection();
}

//for msqli closing connection
protected function closeConnection()
{
    if($this->con !=null){
        $this->con->close();
        $this->con = null;
    }
}

}


