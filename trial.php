<?php
session_start();
$path=$_SESSION["file"];
require("encrypt.php");
require("decrypt.php");
$content =  file_get_contents($path);
$Pass = "Passwort";
$Clear = $content;        

$encrypted = encrypt($Clear, $Pass);
file_put_contents("encrypted.txt",$encrypted);
        
header("location:encrypt_upload.php");


?>