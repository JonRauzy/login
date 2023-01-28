<?php


if(isset($_POST['login'], $_POST['pword'])){
    if($_POST['login'] == "jon" && $_POST['pword'] == "1234"){
        include_once '../view/validView.php';
    }else{
        include_once '../view/noValidView.php';
    }
}else{
    include_once '../view/indexView.php';
}