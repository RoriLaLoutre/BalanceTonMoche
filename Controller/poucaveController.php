<?php
require_once('./models/CrudManager.php');

$template = './views/pages/poucave.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['categorie'])) {
        $categorie = htmlspecialchars($categorie);
    } else {
        $categorie = ''; 
    }

    if (isset($_POST['nom'])) {
        $nom = htmlspecialchars($nom);
    } else {
        $nom = ''; 
    }

    if (isset($_POST['prenom'])) {
        $prenom = htmlspecialchars($prenom);
    } else {
        $prenom = ''; 
    }
    
    if (isset($_FILES['photo'])) {
            $file = $_FILES['photo'];
            $filePath = $file['tmp_name'];
            move_uploaded_file($filePath, './public/specimenpics/' . $file['name']);
    } else {
        $file = ''; 
    }   

    $pos_lat = 0;
    $pos_long = 0;


    addMoche($nom , $prenom,'./public/specimenpics/' . $file['name'] , $categorie , $note , $pos_long , $pos_lat);
}



