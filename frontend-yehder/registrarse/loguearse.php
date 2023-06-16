<?php 
    session_start();

    if(isset($_POST['Loguearse'])){
        require_once("LoginUser.php");

        $credenciales = new LoginUser();

        $credenciales -> setUsername($_POST['username']);
        $credenciales -> setPassword($_POST['password']);

        $login = $credenciales -> login();

        if($login){
            header('Location: ../alquilartemis/views/template.php');
        } else{
            echo "<script> alert('Username o Password estan invalidos'); document.location='../registrarse/login-register.php'</script>";
        }
    }
?>