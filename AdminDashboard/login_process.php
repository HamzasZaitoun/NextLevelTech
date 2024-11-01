<?php
session_start();
require_once 'model/Database.php';
include 'model/User.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $email=$_POST['userLoginEmail'];
    $password=$_POST['userLoginPassword'];

    $user=new User();

    if($user->login($email,$password))
    {
        $_SESSION;
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        

        header('location: index.php');
        exit();
       
    }else
    {
        echo "invalid password or email";
        // header('location: login.php');
        // exit();
    }

}else 
{
    echo "user not found";
}

echo $_SESSION['email'];
echo $_SESSION['password']

?>