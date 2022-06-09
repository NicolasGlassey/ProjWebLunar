<?php
/**
 * @file    addArticle.php
 * @brief   Add article
 * @author  Create by Nathan.CHAUVEAU modified by Adam, Elodie, Pierrot
 * @version 12.05.2022
 */ ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ajout d'une article</title>
</head>

<body>
<form action="/index.php?action=controlarticle" method="post" name="action">
    <div>
        <label for="title">Titre</label>
        <input name="title" type="text" id="title" placeholder="titre de l'article" required>
    </div>
    <div>
        <label for="category">Catégorie</label>
        <select name="category" id="category" required>
            <option value="">---Veuillez choisir une catégorie---</option>
            <option value="teeShirt">Tee-shirt</option>
            <option value="sweat">Sweat</option>
            <option value="sock">Chausette</option>
        </select>
    </div>
    <div>
        <label for="description">Description</label>
        <input name="description" type="text" id="description" placeholder="description de l'article" required>
    </div>
    <div>
        <label for="price">Prix</label>
        <input name="price" type="number" id="price" placeholder="prix de l'article" min="0" step="0.01" value="9.99"
               required>
    </div>
    <div>
        <label for="image">Image</label>
        <input name="image" type="file" id="image" placeholder="image de l'article" accept="image/png, image/jpeg"
               required>
    </div>

    <button class="btn btn-primary" type="submit">Créer</button>
</form>
</body>
</html>
