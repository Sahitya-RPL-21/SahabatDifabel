<?php
class Database{
    public $db,$dbName,$dbUser,$dbPass,$host,$connection;

    function __construct($host,$dbName,$dbUser,$dbPass)
    {
        $this->connection="mysql:host=".$host.";dbname=".$dbName.";charsetutf8";
        $this->db = new PDO($this->connection,$dbUser,$dbPass);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function createUser($data){
        //INSERT INTO `user` (`id`, `username`, `password`) VALUES (NULL, 'fidi', 'fidi123');
        $query = "INSERT INTO `user` (`userId`, `username`, `password`) VALUES (NULL, ?, ?)";
        $statement = $this->db->prepare($query);
        $parameters = [$data->getUsername(),$data->getPassword()];
        return $statement->execute($parameters);
    }

    function getUser($username,$password){
        $query = "SELECT * FROM `user` WHERE username='$username' AND password='$password'";
        $statement = $this->db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
?>