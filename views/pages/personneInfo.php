<link rel="stylesheet" href="views/style/layouts/personneInfo.css">

<div id="info">
    <h2>⚠️ <?=titre($the_report["note"],$dangerLvl);?> ⚠️</h2>
    <div class="info-container">
        <div class="info-img">
                <img class="info-photo" src="<?= $the_report["img"]?>" alt="Report_<?= $the_report["id"]?>_<?= $the_report["nom"]?>_<?= $the_report["prenom"]?>">
        </div>
        <div class="info-text">
            <h4><?= $the_report['note'] ?></h4>
            <p>Prénom : <?= $the_report["prenom"]?></p>
            <p>Nom : <?= $the_report["nom"]?></p>
            <p>Catégorie : <?= $the_report["categorie"]?></p>
            <h5>Prime : <?= prime($the_report["note"], $dangerLvl);?> €
            </h5>
        </div>
    </div>
        
    </div>
    <div id="map"></div>
        <div class="info-coord">
            <h4 id="text_latitude"><?= $the_report['pos_lat'] ?></h4>
            <h4 id="text_longitude"><?= $the_report['pos_long'] ?></h4>
        </div>
    </div>
    

    
</div>