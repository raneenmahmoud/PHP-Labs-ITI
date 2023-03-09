<?php
require_once("config.php");
require_once("functions.php");

$error = "";

if(!empty($_POST)){
    $error = validateForm();
    if(empty($error)){
        Save_To_File();
        die('<body style="margin: 0%;
                background: linear-gradient(#46949b,
                #46949b,
                #a3d4f3,
                #c0e6fa);
                display:flex;
                justify-content:center;
                align-items:center;
                background-attachment: fixed;">
                <div style="
                           
                            width:45%;
                            padding:3%;
                            background-color: white;
                            border-radius: 10px;"
                            
                >'  
                .'<center><h1 >'._THANk_MESSAGE_.'</h1>'
                ."<img src='./views/done1.jpg' style='width:35%; height:30%'>"
                ."<h3> These are Submitted Data by you </h3>"
                ."<b> Name : </b>".trim($_POST['username'])."</br>"
                ."<b> Email : </b>".trim(strtolower($_POST['Email']))."</br>"
                ."<b> message : </b>".trim($_POST['message'])."</br>"
                .'</center>'.
           '</div></body>'
        );
    }
}
$parameter = isset($_GET["page"]) ? $_GET["page"] : "";
if ($parameter === "users")
    require_once("views/users.php");
else
    require_once("views/contactform.php");
    

