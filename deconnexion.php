<?php
//lancement de la session
session_start();
$_SESSION = array();
//destruction de la session
session_destroy();
header('Location: index.php');