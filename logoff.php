<?php

session_start();

print_r($_SESSION);

//remove os indices de um array

session_destroy($_SESSION['autenticado']);
header('Location:index.php');





?>