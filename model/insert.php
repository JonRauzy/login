<?php 

require_once 'src.php';

    
$sqlSub = "INSERT INTO `usersfc`(`firstname`, `lastname`, `mail`, `pword`) VALUES ('$subfirstname','$sublastname','$submail','$subpword')";
mysqli_query($dbFC, $sqlSub);
