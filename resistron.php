<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resistron</title>
    <style>
        label {
    font-size: 1rem;
    padding-right: 10px;
        }

        select {
    font-size: 0.9rem;
    padding: 2px 5px;
        }
    </style>
    
</head>
<body>
<label for="color-select1">Choisissez les couleurs correspondantes :</label>

<select name="color" id="color-select1">
    <?php
    $colorRing12 = ["noir", "brun", "rouge", "orange", "jaune", "vert", "bleu", "violet", "gris", "blanc"]
    ?>
    <option value="">-- Anneau 1 --</option>
    <option value="noir">Noir</option>
    <option value="brun">Brun</option>
    <option value="rouge">Rouge</option>
    <option value="orange">Orange</option>
    <option value="jaune">Jaune</option>
    <option value="vert">Vert</option>
    <option value="bleu">Bleu</option>
    <option value="violet">Violet</option>
    <option value="gris">Gris</option>
    <option value="blanc">Blanc</option>
    <option value="or">Or</option>
    <option value="argent">Argent</option>
</select>

<select name="" id="color-select2">
    <option value="">-- Anneau 2 --</option>
    <option value="noir">Noir</option>
    <option value="brun">Brun</option>
    <option value="rouge">Rouge</option>
    <option value="orange">Orange</option>
    <option value="jaune">Jaune</option>
    <option value="vert">Vert</option>
    <option value="bleu">Bleu</option>
    <option value="violet">Violet</option>
    <option value="gris">Gris</option>
    <option value="blanc">Blanc</option>
    <option value="or">Or</option>
    <option value="argent">Argent</option>
</select>
<select name="" id="color-select3">
    <?php
    $ColorRing3 = ["noir", "brun", "rouge", "orange", "jaune", "vert", "bleu", "violet", "gris", "blanc", "or", "argent"]
    ?>
    <option value="">-- Anneau 3--</option>
    <option value="noir">Noir</option>
    <option value="brun">Brun</option>
    <option value="rouge">Rouge</option>
    <option value="orange">Orange</option>
    <option value="jaune">Jaune</option>
    <option value="vert">Vert</option>
    <option value="bleu">Bleu</option>
    <option value="violet">Violet</option>
    <option value="gris">Gris</option>
    <option value="blanc">Blanc</option>
    <option value="or">Or</option>
    <option value="argent">Argent</option>
</select>
<select name="" id="color-select4">

<?php
$ColorRing4 = ["brun", "rouge", "vert", "bleu", "violet", "gris", "or", "argent"]
?>
    <option value="">-- Anneau 4--</option>
    <option value="noir">Noir</option>
    <option value="brun">Brun</option>
    <option value="rouge">Rouge</option>
    <option value="orange">Orange</option>
    <option value="jaune">Jaune</option>
    <option value="vert">Vert</option>
    <option value="bleu">Bleu</option>
    <option value="violet">Violet</option>
    <option value="gris">Gris</option>
    <option value="blanc">Blanc</option>
    <option value="or">Or</option>
    <option value="argent">Argent</option>
</select>
</body>
</html>



