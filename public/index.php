<?php

require_once '../config.php';
// FC = fightclub

try {
    $dbFC = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
    mysqli_set_charset($dbFC, DB_CHARSET);
} catch (Exception $e) {

    exit(mb_convert_encoding($e->getMessage(), 'UTF-8', 'ISO-8859-1'));
}

$sqlFC = "SELECT * FROM `usersfc`";

$queryFC = mysqli_query($dbFC, $sqlFC);
$nbFC = mysqli_num_rows($queryFC);
$resultFC = mysqli_fetch_all($queryFC, MYSQLI_ASSOC);


if(isset($_POST['login'], $_POST['pword'])){
    foreach($resultFC as $item){
        if($_POST['login'] == $item['firstname'] && $_POST['pword'] == $item['pword']){
            include_once '../view/validView.php';
        }else{
            include_once '../view/noValidView.php';
        }
    }
}else{
    
    if(isset($_GET['p'])){
        switch($_GET['p']){
            case 'inscription' :
                include_once '../view/inscription.php';
                break;
            default :
                '../view/indexView.php';
        }
    } else {
        include_once '../view/indexView.php';
    }
}






// on ferme la DB derrière nous parce qu'on est poli :
mysqli_free_result($queryFC);
mysqli_close($dbFC);