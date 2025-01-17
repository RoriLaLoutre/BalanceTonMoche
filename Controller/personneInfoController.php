<?php
require_once('./models/CrudManager.php');
require_once("wantedController.php");


$template = './views/pages/personneInfo.php';



if(!isset($_GET['id']) || intval($_GET['id']) === 0){
    redirect('home');
}

$the_report = getSignalement($_GET['id']);
if($the_report["nom"]== ''){
    $the_report["nom"] = "Inconnu";
}
if($the_report["prenom"] == ''){
    $the_report["prenom"] = "Inconnu";
}


$template = './views/pages/personneInfo.php';
