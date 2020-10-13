<?php
session_start();
$token = md5 (session_id());
if($_GET["token"]){
    setcookie('login');
header("location: index.php");
exit;
}

?>