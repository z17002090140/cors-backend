<?php
require dirname(__FILE__).'/head.php';

session_start();
$userName=array();
if(isset($_SESSION['name']))
    $userName['userName']=$_SESSION['name'];
else
    $userName['userName']='error';

echo json_encode($userName);
