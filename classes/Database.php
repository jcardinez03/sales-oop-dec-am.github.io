<?php

class Database{
    private $server_name = "localhost";
    private $username = "root";
    private $password = ""; //'root' value for MAMP users
    private $db_name = "the_company_dec";
    protected $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);

        if($this->conn->connect_error){
            die('Unable to connect to the database: ' . $this->conn->connect_error);
        }
    }
}

?>