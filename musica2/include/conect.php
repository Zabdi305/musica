<?php
$NameServer ="localhost";
$UserName ="root";
$Password ="";
$NameDba="musicaU";

$Connect = new mysqli($NameServer, $UserName, $Password, $NameDba);
if($Connect->connect_error){
    die("error" .$Connect->connect_error);
}

?>