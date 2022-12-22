<?php
    require("database.php");

    class User {
        private $username,$password,$id;
        public $nama;
        public $b;
        /* constructor */
        private $database;

        function __construct($un,$up) {
            $this->setUsername($un);
            $this->setPassword($up);
        }

        /* setter function */
        function setId($id){

        }
        function setUsername($un){
            $this->username = $un;
        }
        function setPassword($up){
            $this->password = $up;
        }

        /* getter function */
        function getId($id){
            
        }
        function getUsername(){
            $pUN = $this->username;
            return $pUN;
        }
        function getPassword(){
            $pUP = $this->password;
            return $pUP;
        }

        /* main function */

        function createUser(){
            $database = new Database("localhost","sahabatdifabel","root","");
            $query = "INSERT INTO `user` (`userId`, `username`, `password`) VALUES (NULL, $this->username, $this->password)";
            $statement = $database->db->prepare($query);
            $parameters = [$this->getUsername(),$this->getPassword()];
            return $statement->execute($parameters);
        }
    
        public static function getUser(){
            $database = new Database("localhost","sahabatdifabel","root","");
            $query = "SELECT * FROM `user` ";
            $statement = $this->db->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    };
?>