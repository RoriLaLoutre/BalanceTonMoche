<div class="wanted">
    <h2>Les plus recherchés :</h2>
    <header id="wanted-header">
        <?php foreach ($lastSignalements as $the_report) { ?>
        <div class="box-wanted">
            <!-- Haut gauche -->
            <div class="top-left">
                <?= $the_report["note"] ?>
            </div>
            <!-- Haut droite -->
            <div class="top-right">
                <img src="<?= $the_report["img"] ?>" alt="Report_<?= $the_report["id"] ?>_<?= $the_report["nom"] ?>_<?= $the_report["prenom"] ?>">
            </div>
            <!-- Bas gauche -->
            <div class="bottom-left">
                <p><?= $the_report["nom"] ?></p>
                <p><?= $the_report["prenom"] ?></p>
                <p><?= titre($the_report["note"], $dangerLvl); ?></p>
            </div>
            <!-- Bas droite -->
            <div class="bottom-right" id="map">
                
            </div>
        </div>
        <?php } ?>
    </header>
</div>
