<div class="analyse">
        <h2>Quelques stats :</h2>
        <div class="stat-1">
            <?php
            foreach($lastSignalements as $the_report){ ?>
            <div class="card-report">
                <img src="<?= $the_report["img"]?>" alt="Report_<?= $the_report["id"]?>_<?= $the_report["nom"]?>_<?= $the_report["nom"]?>">
                <p>
                    <?= $the_report["note"]?>
                </p>
            </div>
            <?php
            }
            ?>
        </div>
       
    </div>