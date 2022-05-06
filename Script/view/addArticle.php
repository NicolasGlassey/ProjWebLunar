<?php
/**
 * @file    addArticle.php
 * @brief   Add article
 * @author  Create by Nathan.CHAUVEAU
 * @version 04.02.2022
 */?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ajout d'une article</title>
</head>

<body>
<form action="/index.php?action=controlarticle" method="post" name="action">
    <div>
        <label for="titre">Titre</label>
        <input name="titre" type="text" id="titre"  placeholder="titre de l'article" required >
    </div>
    <div>
        <label for="categorie">Catégorie</label>
        <select name="categorie" id="categorie" required>
        <option value="">---Veuillez choisir une catégorie---</option>
            <option value="Tee-shirt">Tee-shirt</option>
            <option value="Sweat">Sweat</option>
            <option value="Chausette">Chausette</option>
        </select>
    </div>
    <div>
        <label for="description">Description</label>
        <input name="description" type="text" id="description"  placeholder="description de l'article" required >
    </div>
    <div>
        <label for="prix">Prix</label>
        <input name="prix" type="number" id="prix"  placeholder="prix de l'article" min="0" step="0.01" value="9.99" required >
    </div>
    <div>
        <label for="image">Image</label>
        <input name="image" type="file" id="image"  placeholder="image de l'article"  accept="image/png, image/jpeg" required >
    </div>

    <button class="btn btn-primary" type="submit">Crée</button>
</form>
</body>
</html>
