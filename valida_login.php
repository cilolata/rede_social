<?php

session_start();

//metodo de captura de dados
$_POST['email'];
$_POST['password'];


// autenticação de login e senha
$user_autenticado = false;

$usuarios = array(   
array('email' => 'cilolata@gmail.com', 'password' => 'maria111'),
array('email' => 'teste@gmail.com', 'password' => '123')
);


//autenticação de user
foreach($usuarios as $user){
   if($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']){
       $user_autenticado = true;
    }
        }if($user_autenticado){
            header('Location:home.php');
        }else{
            header('Location:index.php');
        }




?>