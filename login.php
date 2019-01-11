<?php
require dirname(__FILE__).'/head.php';

$data=file_get_contents("php://input");
$data=json_decode($data);

$message=array('message'=>"success");
session_start();

if($data->userName==123&&$data->passWord==123){
    $_SESSION['name']=$data->userName;
    echo json_encode($message);
}else{
    $message['message']='error';
    echo json_encode($message);
}