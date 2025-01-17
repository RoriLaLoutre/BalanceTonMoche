<?php
require_once('./models/CrudManager.php');
require_once("wantedController.php");


$template = './views/pages/personneInfo.php';



if(!isset($_GET['id']) || intval($_GET['id']) === 0){
    redirect('home');
}

$the_report = getSignalement($_GET['id']);


$template = './views/pages/personneInfo.php';
