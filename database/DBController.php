<?php

class DBController
{

    // Database Connection Properties
    protected $host = 'localhost'; // as we working on localhost so we specify loaclhost to host
    protected $user = 'root'; // username of phpmyadmin
    protected $password = '';
    protected $database = "shopee";

    // connection property
    public $con = null;

    // call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database); // $this -> current object (host,user,password,database)
        if ($this->con->connect_error){
            echo "Fail " . $this->con->connect_error; // if connection fail thn print fail
        }
    }

    public function __destruct() //it call autometicly when obj is not in used
    {
        $this->closeConnection();
    }

    // for mysqli closing connection
    protected function closeConnection(){
        if ($this->con != null ){
            $this->con->close(); // close() method
            $this->con = null;
        }
    }

}