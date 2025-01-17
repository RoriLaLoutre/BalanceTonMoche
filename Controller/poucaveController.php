<?php
require_once('./models/CrudManager.php');
require_once('./models/connection.php');
$template = './views/pages/poucave.php';
$uploaded = false;
$messageSuccess = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pos_lat = isset($_POST['pos_lat']) && is_numeric($_POST['pos_lat']) ? (float)$_POST['pos_lat'] : 44.833328 ;
    $pos_long = isset($_POST['pos_long']) && is_numeric($_POST['pos_long']) ? (float)$_POST['pos_long'] : -0.56667;
    
    
    if (isset($_POST['categorie']) && ($_POST['categorie'] != '')) {
        $categorie = htmlspecialchars($_POST['categorie']);
    } else {
        $categorie = 'Esthétique Générale'; 
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
    
    if (isset($_FILES['photo'])) {
        $filename = $_FILES['photo']['name'];
        $folder_location = "public/specimenpics/" .$filename;

        if (move_uploaded_file($_FILES['photo']['tmp_name'], $folder_location)) {
            $uploaded = true;
        }
    }

    // Validation des données
    $errors = [];
    if (empty($categorie)) {
        $errors[] = "La catégorie est obligatoire.";
    }
    if (!$uploaded) {
        $errors[] = "Une photo est obligatoire.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        exit;
    }

    function nombreAleatoire() {
        return round(mt_rand() / mt_getrandmax() * (10 - 1) + 1, 2);
    }
    $note = nombreAleatoire();


        if(empty($errors)){
            addMoche($nom , $prenom,$folder_location, $categorie , $note , $pos_long , $pos_lat);
            $messageSuccess = "Votre signalement a bien été pris en compte";
                
        }
}



