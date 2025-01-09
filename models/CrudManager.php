<?php
require_once('./models/connection.php');

// function getLastArticles(int $limit):array{
//     $sql = "SELECT id ,title, description , content , published_at FROM articles order by published_at desc LIMIT :limit";
//     $query = dbConnect()->prepare($sql);
//     $query->bindParam(':limit' , $limit , PDO::PARAM_INT);
//     $query->execute();
//     return $query->fetchAll();
// }

// function getArticle($id) {
//         $id = intval($id);
//         $sql = "SELECT title, description , content , published_at FROM articles where id = :id";
//         $query = dbConnect()->prepare($sql);
//         $query->bindParam(':id' , $id , PDO::PARAM_INT);
//         $query->execute();
//         $article = $query->fetch();
//         if (!$article) {
//             return [];
//         }
//     return $article;
// }

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

        $sql = "INSERT INTO signalement (nom, prenom, note, img, pos_long , pos_lat, categorie, date) 
        VALUES (:nom , :prenom, :note, :img, :pos_long, :pos_lat, :categorie, :date)";
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