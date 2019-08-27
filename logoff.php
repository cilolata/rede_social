<?php

session_start();


session_destroy($_SESSION['autenticado']);
header('Location:index.php');


?>