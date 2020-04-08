<?php
session_start();
$path=$_SESSION["filedec"];
require("encrypt.php");
require("decrypt.php");
//echo $path;
$encrypted =  file_get_contents($path);
$Pass = "Passwort";
$crypted= decrypt($encrypted,$Pass);        
file_put_contents("encrypted3.xml",$crypted);


?>