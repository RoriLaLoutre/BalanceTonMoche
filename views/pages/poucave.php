<div id="poucave">

    <h1>
        Voici la page de dénonciation pour trouble à l'esthétique publique
    </h1>


    <form action="" method="POST" enctype="multipart/form-data" class="form-delation">
        <h4>Renseignement du moche</h4>
        <label for="photo"></label>
        <input type="file" name = "photo" id="photo" required accept=".jpg, .jpeg, .png">
        <div id="photo-view">
            <img src="public/img/add.png" alt="Photo de la dénonciation" id="photo-preview">
            <p>Ajouter la photo du moche</p>
        </div>

        <label for="nom">Nom du spéciment si celui-ci vous est familier</label>
        <input type="text" name = "nom" id="nom" class="insert-input">

        <label for="prenom">Prenom du spéciment si celui-ci vous est familier</label>
        <input type="text" name = "prenom" id="prenom" class="insert-input">

        <label for="prenom">Sélectioner une catégorie </label>
        <select name="categorie" id="categorie" required class="insert-input">
            <option value="">Choisir une catégorie</option>
            <option value="corp">Corps</option>
            <option value="pied">Pied</option>
            <option value="main">Main</option>
            <option value="dents">Dents</option>
            <option value="malformation">Malformation</option>
            <option value="visage">Visage</option>
            <option value="cheveux">Cheveux</option>
            <option value="global">Esthétique globale</option>
            <option value="other">Autres...</option>
        </select>
        <div class="end-form">

            <div class="message">
                <?php if (!empty($messageSuccess)){
                    echo "<p style='color: green; font-weight: bold; font-size: 16px'>$messageSuccess</p>"; 
                }
                ?>
            </div>
            <div class="form-z-btn">
                <input type="submit" text="Soumettre" id="btn-soumettre">
            </div>

    </form>

</div>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const btnSoumettre = document.getElementById('btn-soumettre');
    const posLatInput = document.createElement('input');
    const posLongInput = document.createElement('input');

    // Create hidden inputs for latitude and longitude
    posLatInput.type = 'hidden';
    posLatInput.name = 'pos_lat';
    posLatInput.id = 'pos_lat';

    posLongInput.type = 'hidden';
    posLongInput.name = 'pos_long';
    posLongInput.id = 'pos_long';

    // Add the hidden inputs to the form
    const form = document.querySelector('.form-delation');
    form.appendChild(posLatInput);
    form.appendChild(posLongInput);

    // Request location when the user clicks the submit button
    btnSoumettre.addEventListener('click', (event) => {
        event.preventDefault();

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    // If the user agrees, populate the hidden inputs
                    document.getElementById('pos_lat').value = position.coords.latitude;
                    document.getElementById('pos_long').value = position.coords.longitude;

                    // Submit the form after location is retrieved
                    form.submit();
                },
                (error) => {
                    // If the user denies, allow form submission without location
                    console.warn('Location permission denied or error occurred.');
                    form.submit();
                }
            );
        } else {
            // If geolocation is not supported, submit the form without location
            console.warn('Geolocation is not supported by this browser.');
            form.submit();
        }
    });
});
</script>