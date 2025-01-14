<div class="analyse">
        <h2>Quelques stats :</h2>
        <div class="graph-container">
        <h2>Graphique en bâtons - Notes Moyennes</h2>

        <?php foreach ($data as $row): 
            // Calcul de la largeur de la barre en fonction de la note moyenne
            $barWidth = ($row['moyenne_note'] / 10) * 100; 
        ?>
        <div class="bar">
            <!-- Étiquette de la catégorie -->
            <div class="bar-label"><?php echo htmlspecialchars($row['categorie']); ?></div>

            <!-- Conteneur de la barre -->
            <div class="bar-container">
                <!-- Barre dynamique -->
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