<?php
session_start();
require_once("functions.php");

$cnx=connexion();

$email=$_POST["emailuser"];
$pass=$_POST["passworduser"];

$req=mysqli_query($cnx, "select * from user where emailuser='{$email}' ");
$existe=0;
while($d=mysqli_fetch_object($req)){
    if(password_verify($pass,$d->passworduser)){
    $d1=date('h-i-s, j-m-y');
    $req1=mysqli_query($cnx,"update user set dateaccess= '{$d1}' where iduser={$d->iduser} ");
    
    $_SESSION["nameuser"]=$d->nameuser.''.$d->prenomuser;
    $_SESSION["iduser"]=$d->iduser;
    $existe=1;
    }
}
if($existe==0){
    $_SESSION["type"]="danger";
    $_SESSION["erreur"]="Erreur Login ou bien Password!!!";
    header("location:connexion.php");
   
}else{
header("location:accueil.php");}
?>