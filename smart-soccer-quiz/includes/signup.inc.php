<?php

$errors = array(); 
$_SESSION['success'] = "";

if(isset($_POST['submit'])) {
    
    include_once 'dbh.inc.php';
    
    $first = mysqli_real_escape_string($conn,$_POST['first']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
    $pwdconfirm = mysqli_real_escape_string($conn,$_POST['pwdconfirm']);
    
    //Error handlers
    //Check for empty feilds
    /*if (empty($first) || empty($email) || empty($phone) || empty($pwd) || empty($pwdconfirm)){
         header("Location: ../signup.php?signup=empty");
         exit();*/
    /*else{
        //check if input characters are valid
        if(!preg_match("/^[a-zA-Z]*$/", $first) ||!preg_match("/^[0-9]*$/", $phone){
            header("Location: ../signup.php?signup=invalid");
            exit();
        } else{
            //check if email is valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../signup.php?signup=invalid email");
                exit();
            }*/
    if ($pwd !=$pwdconfirm){
        array_push($rrors, "The two passwords do not match");
    }
    if (count($errors) == 0) {
			$pwd = md5($pwdconfirm);{
                //Insert user into database
                $sql = "INSERT INTO users (user_first, user_email, user_phone, user_pwd, user_pwdconfirm) VALUES('$first, $email, $phone, $pwd, $pwdconfirm');";
                
                $result = mysqli_query($conn,$sql);
                $_SESSION['username'] = $first;
			    $_SESSION['success'] = "You are now logged in";
                header('Location: signup.php');
            }
    }
        } else {
    header("Location: ../signup.php");
    exit();
}