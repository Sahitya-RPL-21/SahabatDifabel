<?php
class Database{
    public $db,$dbName,$dbUser,$dbPass,$host,$connection;

    function __construct($host,$dbName,$dbUser,$dbPass)
    {
        $this->connection="mysql:host=".$host.";dbname=".$dbName.";charsetutf8";
        $this->db = new PDO($this->connection,$dbUser,$dbPass);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
}
?>