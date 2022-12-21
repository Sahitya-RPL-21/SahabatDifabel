<?php
require('../Koneksi.php');

class Laporan
{
    public $nama;
    public $tkp;
    public $deskripsi;

    public function __construct($nama, $tkp, $deskripsi)
    {
        $this->nama = $nama;
        $this->tkp = $tkp;
        $this->deskripsi = $deskripsi;
    }

    function submit()
    {
        $conn = new Koneksi();
        $query = "INSERT INTO `laporan` (`nama`, `tkp`, `deskripsi`) VALUES (?, ?, ?, ?, ?)";
        $statement = $conn->db->prepare($query);
        $parameters = [$this->nama, $this->tkp, $this->deskripsi];
        return $statement->execute($parameters);
    }
}
