<div id="info">
    <div class="card-info">
        <img class="info-photo" src="<?= $the_report["img"]?>" alt="Report_<?= $the_report["id"]?>_<?= $the_report["nom"]?>_<?= $the_report["prenom"]?>">
        <div>
            <h4><?= $the_report['note'] ?></h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit sapiente fuga nesciunt error obcaecati, maiores possimus molestias, iure rerum voluptates, quis adipisci? Inventore blanditiis iste enim excepturi repellendus deleniti corporis!</p>
        </div>
        
    </div>
    <div id="map"></div>
        <div class="info-coord">
            <h4 id="text_latitude"><?= $the_report['pos_lat'] ?></h4>
            <h4 id="text_longitude"><?= $the_report['pos_long'] ?></h4>

        </div>
    

    
</div>