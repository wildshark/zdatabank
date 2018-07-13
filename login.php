<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 04-Jun-18
 * Time: 7:57 PM
 */

require "config/db.connection.php";
require "config/setup.php";

session_start();

if ($_POST['submit'] === "submit"){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);

    $account="SELECT * FROM `get_user` WHERE username ='$username' AND password='$password'";
    $result=$conn->query($account);
    $user = $result->fetch_assoc();
    if ($user > 0 ) {
        //load page dashboard
        $token = md5($password."101".$username);
        $_SESSION['user-token'] = $token;
        $_SESSION['user-name'] = $username;
        $status = $user['statusID'];
        $_SESSION['account-status'] = $status;

        header("location: page.php?page=user-account&r=dash&s={$status}&error=1&alert=1&token={$token}");
    }else{
        //echo"try admin login";
        $admin ="SELECT * FROM `get_admin` WHERE username ='$username' AND password='$password'";
        $result=$conn->query($admin);
        $u_admin = $result->fetch_assoc();
        if ($u_admin > 0){
            //echo "load admin dashboard";
            $token = md5($password."101".$username);
            $_SESSION['user-token'] = $token;
            $_SESSION['user-name'] = $username;
            $status = $u_admin['statusID'];
            $_SESSION['account-status'] = $status;

            header("location: page.php?page=admin-account&r=dash&s={$status}&error=1&alert=1&token={$token}");
        }else{
            header("location: index.php");
        }

    }

}elseif ($_POST['submit'] === "register"){

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $department = $_POST['department'];
    $password = md5($password);
    $user_token = md5($password."101".$username);

    $add="INSERT INTO `admin` (`u_name`, `username`, `password`,`email`, `department`,`mobile`) VALUES ('$name', '$username', '$password','$email', '$department','$mobile')";
    $result = $conn->query($add);
    if ($result === TRUE){

        $_SESSION['user-token'] = $user_token;
        $_SESSION['user-name'] = $username;
        $status = "1";
        header("location: page.php?page=user-account&r=dash&s={$status}&error=1&alert=1&token={$user_token}");
    }else{
        header("location: index.php");
    }

}