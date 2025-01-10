<div id="poucave">

    <h1>
        Voici la page de dénonciation pour trouble à l'esthétique publique
    </h1>

    <form action="" method="POST" enctype="multipart/form-data" class="form-delation">

        <label for="photo">Uploader la photo</label>
        <input type="file" name = "photo" id="photo" >

        <label for="nom">Nom du spéciment si celui-ci vous est familié</label>
        <input type="text" name = "nom" id="nom" class="insert-input">

        <label for="prenom">Prenom du spéciment si celui-ci vous est familié</label>
        <input type="text" name = "prenom" id="prenom" class="insert-input">

        <label for="prenom">Sélectioner une catégorie </label>
        <select name="categorie" id="categorie" class="insert-input">
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
        <div class="form-z-btn">
            <input type="submit" text="Soumettre" id="btn-soumettre">
        </div>

    </form>



</div>