<div class="wanted">
        <h2>Les plus recherchés :</h2>
        <div class="zone-wanted">
            <?php
            foreach($lastSignalements as $the_report){ ?>
            <div class="card-report">

                <p>
                    <?= $the_report["note"]?> / 10
                </p>
                <img src="<?= $the_report["img"]?>" alt="Report_<?= $the_report["id"]?>_<?= $the_report["nom"]?>_<?= $the_report["prenom"]?>">
                <div class="zone-btn">
                    <a href="#" id="btn-id" class ="btn-bleu">A propos</a>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
       
    </div>