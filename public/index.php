<?php

require_once '../config.php';
// FC = fightclub

var_dump($querySub);

try {
    // oc à la db
    $dbFC = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
    mysqli_set_charset($dbFC, DB_CHARSET);
} catch (Exception $e) {

    exit(mb_convert_encoding($e->getMessage(), 'UTF-8', 'ISO-8859-1'));
}

// rêquete sql
$sqlFC = "SELECT * FROM `usersfc`";

//  co la requête à la db et tout :
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
        if($_GET['p'] == "sub"){
                include_once '../view/sub.php';
                if(isset($_POST['subfirstname'], $_POST['sublastname'], $_POST['submail'],$_POST['subpword'])){
                    $subfirstname = htmlspecialchars(strip_tags(trim($_POST['subfirstname'])));
                    $sublastname = htmlspecialchars(strip_tags(trim($_POST['sublastname'])));
                    $submail = htmlspecialchars(strip_tags(trim($_POST['submail'])));
                    $subpword = htmlspecialchars(strip_tags(trim($_POST['subpword'])));

                    if(!empty($subfirstname) && !empty($sublastname) && filter_var($submail, FILTER_VALIDATE_EMAIL) && !empty($subpword)){
                        $sqlSub = "INSERT INTO `usersfc`(`firstname`, `lastname`, `mail`, `pword`) VALUES ('$subfirstname','$sublastname','$submail','$subpword')";
                        $querySub = mysqli_query($dbFC, $sqlSub);
                    
                }       
                }     
        }
    }else{
        // sinon on met la page d'accueil stout
        include_once '../view/indexView.php';
    }
}

// on ferme la DB derrière nous parce qu'on est poli :
mysqli_free_result($queryFC);
mysqli_close($dbFC);