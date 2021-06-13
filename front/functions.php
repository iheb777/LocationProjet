<?php
function connexion(){

    return mysqli_connect("localhost","jihen", "jihen", "miniProjet");

}

function getAllVoiture(){
    $cnx=connexion();
    $req=mysqli_query($cnx,"select * from voiture");
    $tab=[];
    while($d=mysqli_fetch_object($req)){
        $tab[]=$d;
    }
    mysqli_free_result($req);
    return $tab ;

}
function getAllVoitureByAnnee(){
    $cnx=connexion();
    $req=mysqli_query($cnx,"select annee from voiture, modele_voiture  where voiture.modele_id=modele_voiture.id_modele");
    $tab=[];
    while($d=mysqli_fetch_object($req)){
        $tab[]=$d;
    }
    mysqli_free_result($req);
    return $tab ;
}
function getAllVoitureByModelID($modele_id){
    $cnx=connexion();
    $req=mysqli_query($cnx,"select * from voiture where modele_id={$modele_id}");
    $tab=[];
    while($d=mysqli_fetch_object($req)){
        $tab[]=$d;
    }
    mysqli_free_result($req);
    return $tab ;

}
function getModeleById($id){
    $cnx=connexion();
    $req=mysqli_query($cnx,"select * from  modele_voiture where id_modele={$id}");
    $tab=[];
    while($d=mysqli_fetch_object($req)){
        $tab[]=$d;
    }
    mysqli_free_result($req);
    return $tab ;
}
function getAllModele(){

    $cnx=connexion();
    $req=mysqli_query($cnx,"select * from  modele_voiture ");
    $tab=[];
    while($d=mysqli_fetch_object($req)){
        $tab[]=$d;
    }
    mysqli_free_result($req);
    return $tab ;

}
function addUser($nameuser, $prenomuser, $emailuser, $passworduser){
    $cnx=connexion();
    $req=mysqli_query($cnx, "insert into user (nameuser, prenomuser, emailuser, passworduser, dateaccess, role, etatuser) values ('{$nameuser}','{$prenomuser}','{$emailuser}','{$passworduser}', NULL ,'client', 1)");
    
}
function reserver($voiture, $villeDep, $dateP, $dateR){
    $cnx=connexion();
    $req=mysqli_query($cnx, "insert into reservation (voiture_id, ville_depart, date_debut, date_fin) values('{$voiture}'','{$villeDep}','{$dateP}','{$dateR}' ");
     
    
}
?>