<?php
    if(isset($_POST['Registrarse'])){
        require_once("RegistroUser.php");

        $registrar = new RegistroUser();

        $registrar -> setNombres($_POST['nombres']);
        $registrar -> setEmail($_POST['email']);
        $registrar -> setUsername($_POST['username']);
        $registrar -> setPassword($_POST['password']);

        $register = $registrar -> insertData();

        if($register){
            header('Location: ../alquilartemis/views/template.php');
        } else{
            echo "<script> alert('Username o Password estan invalidos'); document.location='../registrarse/login-register.php'</script>";
        }
    }
?>