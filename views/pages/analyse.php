<div class="analyse">
        <h2 id="title" class="margin-bottom">Nos statistiques et résultats</h2>
        <div class="graph-container">
        <h2 class="margin-bottom">Graphique en bâtons - Notes moyennes Par catégorie</h2>

        <?php foreach ($data as $row): 
            $barWidth = ($row['moyenne_note'] / 10) * 100; 
        ?>
        <div class="bar">
            <div class="bar-label"><?php echo htmlspecialchars($row['categorie']); ?></div>

            <div class="bar-container">
                <div 
                    class="bar-value" 
                    style="width: <?php echo $barWidth; ?>%;"
                >
                    <?php echo number_format($row['moyenne_note'], 1); ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class ="parent-stats">
        <div class="stats-container">
            <div class = "grid-item"></div>
            <div class = "grid-item"></div>
            <div class = "grid-item"></div>
            <div class = "grid-item"></div>
            <div class = "grid-item"></div>
            <div class = "grid-item"></div>
        </div>
    </div>
    </div>