<?php

session_start();

if (isset($_SESSION["atexto"])){
    $atexto=$_SESSION["atexto"];
    $row=count($atexto);
}
else{
    $row=0;
}

if ($row < 1 )
    $atexto[0]=$_POST["texto"];
else
    $atexto[$row]=$_POST["texto"];

$_SESSION["atexto"]=$atexto;
var_dump($atexto);
?>
