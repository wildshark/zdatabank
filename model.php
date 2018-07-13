<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 04-Jun-18
 * Time: 7:57 PM
 */

include_once 'config/db.connection.php';
include_once 'config/setup.php';
include_once 'control/session.php';
include_once 'control/global.php';
include_once "modules/complaint.book.module";

if (!isset($_SESSION['user-token'])){
    logout();
}else{
    $session_token = $_SESSION['user-token'];

    if (!isset($_POST['token'])){
        $url_token = $_GET['token'];
        $page = $_GET['ui']; // page
    }else{
        $url_token = $_POST['token'];
        $page = $_POST['ui']; // page
    }

    if ($session_token === $url_token){
        //process

        switch ($page){

            case"complaint-book";
            // add complaint information
                add_complain($conn);
            break;

            case"letter-status";

            break;

            case"del-complaint.book";
                //"del-complaint.book";
                delete_complain($conn);
            break;

        }

    }else{
        //return to previous page
        echo"wrong token";
    }
}