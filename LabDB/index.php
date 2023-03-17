<?php

//Know about deatails of my php version
// phpinfo();

//check for specific extension in php version
// if(extension_loaded("mysqli")){
//     echo "existed";
// }else{
//     echo "not existed";
// }
require_once('vendor/autoload.php');

$sqlhandler = new MySQLHandler("items");

// $connect = $sqlhandler->connect();

//check connection
// if($connect){
//     echo 'connected';
// }else{
//     echo 'disconnect';
//     }

if(isset($_GET["id"]) && is_numeric($_GET["id"])){
    require_once("views/single.php");
}else{
    require_once("views/all.php");
}
