<?php

require_once 'src.php';

// rêquete sql
$sqlFC = "SELECT * FROM `usersfc`";
//  co la requête à la db et tout :
$queryFC = mysqli_query($dbFC, $sqlFC);
$nbFC = mysqli_num_rows($queryFC);
$resultFC = mysqli_fetch_all($queryFC, MYSQLI_ASSOC);
