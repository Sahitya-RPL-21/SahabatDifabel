<?php
class Koneksi
{
    public $koneksi;
    public $host = "localhost";
    public $dbname = "sahabatdifabel";
    public $dbuser = "root";
    public $dbpass = "";
    public $db;

    function __construct()
    {
        $this->koneksi = "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charsetutf8";
        $this->db = new PDO($this->koneksi, $this->dbuser, $this->dbpass);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

}
