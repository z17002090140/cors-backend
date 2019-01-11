<?php
header("Access-Control-Allow-Credentials:true");
header("Access-Control-Allow-Headers:content-type,xfilecategory,xfilename,xfilesize");
header("content-type:application/json");

$allow_origin=array(
    'http://10.30.29.92:63341'
);

$origin=isset($_SERVER['HTTP_ORIGIN'])?$_SERVER['HTTP_ORIGIN']:"";
if(in_array($origin,$allow_origin)){
    header("Access-Control-Allow-Origin:".$origin);
}
