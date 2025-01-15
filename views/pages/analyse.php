<div class="analyse">
        <h2>Quelques stats :</h2>
        <div class="graph-container">
        <h2>Graphique en bâtons - Notes moyennes Par catégorie</h2>

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
       
    </div>