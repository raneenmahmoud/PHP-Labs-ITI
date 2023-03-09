<?php


function ValidateForm(){
    
    $uname = isset($_POST["username"])? $_POST["username"]: "";
    $email = isset($_POST["Email"])? $_POST["Email"]: "";
    $message = isset($_POST["message"])? $_POST["message"]: "";
   
    //check for empty inputs
    if(empty($uname) || empty($email) || empty($message))
    {
        return "There is an empty field";
    }
    // else if(empty($uname) || empty($email) || empty($msg)){
    //     $erroremptyname = empty($_POST["username"])? "This Name field is required" : "";
    //     $erroremptymail = empty($_POST["Email"])? "This Email field is required": "";
    //     $erroremptymssg = empty($_POST["message"])? "This Message field is required": "";
    // }

    //restrict the username input
    else if(strlen($uname) > Max_uname_Length){
        return "The name is too large";
    }
    //restrict email input
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return "This is invalide email";

    }
    //restrict message input
    else if(strlen($message) > Max_msg_Length){
        return "The Message is too large";
    }
    //all inputs are allowed 
    else{
        return "";
    }
}

function remember_input($input){
    if(isset($_POST[$input]) && !empty($_POST[$input])){
        return $_POST[$input];
    }
    else {
        return "";
    }
}

?>