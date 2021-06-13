<?php
require_once("functions.php");

$voiture=$_GET["voiture"];
$villeDep=$_GET["villeDep"];
$dateP=$_GET["dateP"];
$dateR=$_GET["dateR"];

reserver($voiture, $villeDep, $dateP, $dateR);
header("location:accueil.php");
?>