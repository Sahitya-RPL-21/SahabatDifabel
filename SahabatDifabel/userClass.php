<?php
    class User {
        private $username,$password,$id;
        /* constructor */

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
    };
    class Admin extends User {
        private $isAdmin;
    };
?>