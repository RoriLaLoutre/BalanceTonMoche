<?php
require_once('./models/CrudManager.php');

$template = './views/pages/poucave.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['categorie']) && ($_POST['categorie'] != '')) {
        $categorie = htmlspecialchars($_POST['categorie']);
    } else {
        $categorie = ''; 
    }

    if (isset($_POST['nom'])) {
        $nom = htmlspecialchars($_POST['nom']);
    } else {
        $nom = ''; 
    }

    if (isset($_POST['prenom'])) {
        $prenom = htmlspecialchars($_POST['prenom']);
    } else {
        $prenom = ''; 
    }
    
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $file = $_FILES['photo'];
        $filePath = $file['tmp_name'];
        move_uploaded_file($filePath, './public/specimenpics/' . $file['name']);
        $imgPath = './public/specimenpics/' . $file['name'];
        echo $imgPath;
    } else {
        $file = null;
        $imgPath = null;
    }

    // Validation des données
    $errors = [];
    if (empty($categorie)) {
        $errors[] = "La catégorie est obligatoire.";
    }
    if (empty($nom)) {
        $errors[] = "Le nom est obligatoire.";
    }
    if (empty($prenom)) {
        $errors[] = "Le prénom est obligatoire.";
    }
    if (!$imgPath) {
        $errors[] = "Une photo est obligatoire.";
    }

    if (empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        exit;
    }

    // Valeurs par défaut
    $pos_lat = 0;
    $pos_long = 0;
    $note = 1;
        if(!empty($errors)){
        addMoche($nom , $prenom,$imgPath, $categorie , $note , $pos_long , $pos_lat);
        }
}



