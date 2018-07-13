<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 05-Jun-18
 * Time: 4:02 AM
 */

include_once "modules/data.sheet.php";
include_once "modules/complaint.book.module";

if (!isset($_POST['r'])){

    $page = $_GET['r'];
    $token = $_GET['token'];
}else{

    $page = $_POST['r'];
    $token = $_POST['token'];
}

if (!isset($_SESSION['user-token'])){

}else{
    if($_SESSION['user-token'] == $token){

        switch ($page){

            case"dash";
                $page_title="All Letter";
                $body="administrator/dashboard/dashboard.php";
                include_once "template/table.default.php";
            break;

            case"add.letter";
                $page_title="New Letter";
                $body="administrator/letters/add.letter.php";
                include_once "template/table.default.php";
            break;

            case"all.letter";
                $page_title="All Letter";
                $body="administrator/letters/all.letter.php";
                include_once "template/table.default.php";
                break;

            case"pending.letter";
                $page_title="Pending Letter";
                $body="administrator/letters/all.letter.php";
                include_once "template/table.default.php";
                break;

            case"approve.letter";
                $page_title="Approved Letter";
                $body="administrator/letters/all.letter.php";
                include_once "template/table.default.php";
                break;

            case"complete.letter";
                $page_title="Complete Letter";
                $body="administrator/letters/all.letter.php";
                include_once "template/table.default.php";
                break;

            default:
                break;
        }
    }else{

    }
}
