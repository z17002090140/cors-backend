<?php
require dirname(__FILE__).'/head.php';

session_start();
$_SESSION['name']=null;
session_destroy();

$message=array('message'=>"success");
echo json_encode($message);