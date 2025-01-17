<?php
require_once('./models/connection.php');

function getLastSignalements(int $limit):array{
    $sql = "SELECT id ,nom, prenom , note , img , pos_long , pos_lat FROM signalement where note <= 5 order by note asc limit :limit";
    $query = dbConnect()->prepare($sql);
    $query->bindParam(':limit' , $limit , PDO::PARAM_INT);
    $query->execute();
    return $query->fetchAll();
}

function getSignalement($id) {
        $id = intval($id);
        $sql = "SELECT id ,nom, prenom , note ,categorie , img , pos_long , pos_lat FROM signalement where id = :id";
        $query = dbConnect()->prepare($sql);
        $query->bindParam(':id' , $id , PDO::PARAM_INT);
        $query->execute();
        $signalement = $query->fetch();
        if (!$signalement) {
            return [];
        }
    return $signalement;
}

// function getALLArticleTitle() {
//     $sql = "SELECT id, title FROM articles";
//     $query = dbConnect()->prepare($sql);
//     $query->execute();
//     $articles = $query->fetchAll();
//     if (!$articles) {
//         return [];
//     }
// return $articles;
// }
function addMoche($nom , $prenom,$img , $categorie , $note , $pos_long , $pos_lat){
        $dt = time();
        $date = date( "Y-m-d", $dt );   //a enlever si inutilisé

        $sql = "INSERT INTO signalement (nom, prenom, note, img, pos_long , pos_lat, date, categorie) 
        VALUES (:nom , :prenom, :note, :img, :pos_long, :pos_lat, :date, :categorie)";
        $query = dbConnect()->prepare($sql);
        $query->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':note' => $note,
            ':img' => $img,
            ':pos_long' => $pos_long,
            ':pos_lat' => $pos_lat,
            ':categorie' => $categorie,
            ':date' => $date,
        ]);


}

function getNotesMoyennesParCategorie(): array {
    $sql = "SELECT categorie, AVG(note) AS moyenne_note 
            FROM signalement 
            GROUP BY categorie 
            ORDER BY moyenne_note asc";

    try {
        $db = dbConnect(); // Connexion à la base de données
        $query = $db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC); // Retourne les résultats
    } catch (PDOException $e) {
        error_log("Erreur dans getNotesMoyennesParCategorie: " . $e->getMessage());
        return [];
    }
}

function getNotesMoyenne(): float {
    $sql = "SELECT AVG(note) AS moyenne FROM signalement";
    try {
        $db = dbConnect();
        $query = $db->prepare($sql);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        
        return $result['moyenne'] !== null ? (float)$result['moyenne'] : 0.0;
    } catch (PDOException $e) {
        error_log("Erreur dans getNotesMoyenne: " . $e->getMessage());
        return 0.0; 
    }
}

