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

    <option value="">-- Anneau 1 --</option>
    <?php
    
    $ColorRing12 = ["noir" => 0, "brun" => 1, "rouge" => 2, "orange" => 3, "jaune" => 4, "vert" => 5, "bleu" => 6, "violet" => 7, "gris" => 8, "blanc" => 9];
    foreach ($ColorRing12 as $color => $value) {
        ?>
        <option value="<?=$color ?>"><?= $color ?></option>
        <?php
    }
    ?>
    
</select>

<select name="" id="color-select2">
    <option value="">-- Anneau 2 --</option>
    <?php
foreach($ColorRing12 as $color => $value) {
?>
    <option value="<?= $color ?>"><?= $color ?></option>
<?php
}
?>

</select>

<select name="" id="color-select3">
    <option value="">-- Anneau 3--</option>
    <?php
    $ColorRing3 = ["noir", "brun", "rouge", "orange", "jaune", "vert", "bleu", "violet", "gris", "blanc", "or", "argent"];
    
foreach($ColorRing3 as $color) {
?>
    <option value="<?= $color ?>"><?= $color ?></option>
<?php
}
?>

</select>

<select name="" id="color-select4">

    <option value="">-- Anneau 4--</option>
<?php
$ColorRing4 = ["brun", "rouge", "vert", "bleu", "violet", "gris", "or", "argent"];

foreach($ColorRing4 as $color) {
?>
    <option value="<?= $color ?>"><?= $color ?></option>
<?php
}
?>

</select>
</body>
</html>



