<?php
    require_once("../SIMULACRO-ARTEMIS/fullstack/backend/config/Conectar.php");
    require_once("../SIMULACRO-ARTEMIS/fullstack/backend/config/db.php");

    class RegistroUser extends Conectar{
        private $id;
        private $idEmpleado;
        private $nombres;
        private $email;
        private $username;
        private $password;

        public function __construct($id = 0, $idEmpleado = 0, $nombres = 0, $email = "", $username = "", $password = "", $dbCnx = ""){
            $this -> id = $id;
            $this -> idEmpleado = $idEmpleado;
            $this -> nombres = $nombres;
            $this -> email = $email;
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

        public function setIdEmpleado($idEmpleado){
            $this -> idEmpleado = $idEmpleado;
        }

        public function getIdEmpleado(){
            return $this -> idEmpleado;
        }

        public function setNombres($nombres){
            $this -> nombres = $nombres;
        }

        public function getNombres(){
            return $this -> nombres;
        }

        public function setEmail($email){
            $this -> email = $email;
        }

        public function getEmail(){
            $this -> email;
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

        public function checkUser($email){
            try {
                $stm = $this -> dbCnx -> prepare("SELECT * FROM users WHERE email = '$email'");
                $stm -> execute();
                if ($stm -> fetchColumn()){
                    return true;
                } else{
                    return false;
                }
            } catch (Exception $e) {
                return $e -> getMessage();
            }
        }

        public function insertData(){
            try {
                $stm = $this -> dbCnx -> prepare("INSERT INTO users (idEmpleado, nombres, email, username, password) values(?,?,?,?,?)");
                $stm -> execute([$this -> idEmpleado, $this -> nombres, $this -> email, $this -> username, md5($this -> password)]);
            } catch (Exception $e) {
                return $e -> getMessage();
            }
        }
    }
?>