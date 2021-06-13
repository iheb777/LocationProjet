<?php
require_once("functions.php");

$nomeuser=$_GET["nomeuser"];
$prenomuser=$_GET["prenomuser"];
$emailuser=$_GET["emailuser"];
$passworduser=$_GET["passworduser"];

addUser($nameuser, $prenomuser, $emailuser, $passworduser);
header("location:accueil.php");
?>