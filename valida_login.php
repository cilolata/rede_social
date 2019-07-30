<?php

session_start();


// autenticação de login e senha
$user_autenticado = false;

$usuarios = array(   
array('email' => 'cilolata@gmail.com', 'password' => 'maria111'),
array('email' => 'teste@gmail.com', 'password' => '123'),
array('email' => 'burguipsi@hotmail.com', 'password' => '123')
);


//autenticação de user
foreach($usuarios as $user){
   if($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']){
       $user_autenticado = true;
    }
        }if($user_autenticado){
            $_SESSION['autenticado'] = 'sim';
            header('Location:home.php');
        }else{
            $_SESSION['autenticado'] = 'nao';
            header('Location:index.php');
        }




?>