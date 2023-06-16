<?php
    require_once("../SIMULACRO-ARTEMIS/fullstack/backend/config/Conectar.php");
    require_once("../SIMULACRO-ARTEMIS/fullstack/backend/config/db.php");

    class LoginUser extends Conectar{
        private $id;
        private $username;
        private $password;

        public function __construct($id = 0, $username = "", $password = "", $dbCnx = ""){
            $this -> id = $id;
            $this -> username = $username;
            $this -> password = $password;
            parent:: __construct($dbCnx);
        }

        public function setId($id){
            $this -> id = $id;
        }

        public function getId(){
            return $this -> id;
        }

        public function setUsername($username){
            $this -> username = $username;
        }

        public function getUsername(){
            $this -> username;
        }

        public function setPassword($password){
            $this -> password = $password;
        }

        public function getPassword(){
            $this -> password;
        }

        public function fetchAll(){
            try {
                $stm = $this -> dbCnx -> prepare("SELECT * FROM users");
                $stm -> execute();
                return $stm -> fetchAll();
            } catch (Exception $e) {
                return $e -> getMessage();
            }
        }

        public function login(){
            try {
                $stm = $this -> dbCnx -> prepare("SELECT * FROM users WHERE username = ? AND password = ?");
                $stm -> execute([$this -> username, md5($this -> password)]);
                $user = $stm -> fetchAll();
                if (count($user) > 0){
                    session_start();
                    $_SESSION['id'] = $user[0]['id'];
                    $_SESSION['id'] = $user[0]['username'];
                    $_SESSION['id'] = $user[0]['password'];
                    return true;
                } else{
                    false;
                }
            } catch (Exception $e) {
                return $e -> getMessage();
            }
        }

        public function loginEmpleados(){
            try {
                $stm = $this -> dbCnx -> prepare("SELECT * FROM empleados WHERE email = ? AND password = ?");
                $stm -> execute([$this -> username, md5($this -> password)]);
                $user = $stm -> fetchAll();
                if (count($user) > 0){
                    session_start();
                    $_SESSION['id'] = $user[0]['id'];
                    $_SESSION['id'] = $user[0]['username'];
                    $_SESSION['id'] = $user[0]['password'];
                    return true;
                } else{
                    false;
                }
            } catch (Exception $e) {
                return $e -> getMessage();
            }
        }
    }
?>