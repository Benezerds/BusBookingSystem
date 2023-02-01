<?php


use Model\UserModel;

require_once '../Model/UserModel.php';

class CredentialsController{

}
    $user = new UserModel();

    // Begin session
    if(isset($_POST['signin']) && isset($_POST['UserID']) && isset($_POST['Password'])){
        $login = $user->login();

        if ($login == true) {
            header('Location: ../View/dashboard.php');
        }else{
            echo "<script type='text/javascript'>alert('Failed to Login! Incorrect Roll No or Password')</script>";
            header('Location: ../Controller/HomeController.php');
        }
    }

    //Register new user
    if(isset($_POST['signup'])){
        $user->registerUser();
        header('Location: ../Controller/HomeController.php');
    }
?>