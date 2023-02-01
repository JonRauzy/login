<?php

require_once '../config.php';
// FC = fightclub
require_once '../model/connect.php';

if (isset($_POST['login'], $_POST['pword'])) {
    foreach ($resultFC as $item) {
        if ($_POST['login'] == $item['firstname'] && $_POST['pword'] == $item['pword']) {
            include_once '../view/validView.php';
        } else {
            include_once '../view/noValidView.php';
        }
    }
} else if (isset($_GET['p'])) {
    if ($_GET['p'] == "sub") {
        include_once '../view/sub.php';
        if (isset($_POST['subfirstname'], $_POST['sublastname'], $_POST['submail'], $_POST['subpword'])) {
            $subfirstname = htmlspecialchars(strip_tags(trim($_POST['subfirstname'])));
            $sublastname = htmlspecialchars(strip_tags(trim($_POST['sublastname'])));
            $submail = htmlspecialchars(strip_tags(trim($_POST['submail'])));
            $subpword = htmlspecialchars(strip_tags(trim($_POST['subpword'])));
            if (!empty($subfirstname) && !empty($sublastname) && filter_var($submail, FILTER_VALIDATE_EMAIL) && !empty($subpword)) {
                require '../model/insert.php';
            }
        }
    }
} else {
    // sinon on met la page d'accueil stout
    include_once '../view/indexView.php';
}
