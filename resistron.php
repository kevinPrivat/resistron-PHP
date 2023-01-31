<?php
    const KILO = 1_000;
    const MEGA = 1_000_000;
    const GIGA = 1_000_000_000;
?><!DOCTYPE html>
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

<form action="" method="get">

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
    $ColorRing3 = [
        "noir"   => 1,      "brun"   => 10,      "rouge" => 100, 
        "orange" => 1*KILO, "jaune"  => 10*KILO, "vert"  => 100*KILO, 
        "bleu"   => 1*MEGA, "violet" => 10*MEGA, "gris"  => 100*MEGA, 
        "blanc"  => 1*GIGA, 
        "or" => 0.1, "argent" => 0.01];
        
        foreach($ColorRing3 as $color => $value) {
            ?>
        <option value="<?= $color ?>"><?= $color ?></option>
        <?php
    }
    ?>
</select>

<select name="" id="color-select4">
    
    <option value="">-- Anneau 4--</option>
    <?php
$ColorRing4 = ["brun" => 1, "rouge" => 2, "vert" => 0.5 , "bleu" => 0.25, "violet" => 0.10, "gris"=> 0.05, "or"=> 5, "argent" => 10];

foreach($ColorRing4 as $color => $value) {
?>
    <option value="<?= $color ?>"><?= $color ?></option>
<?php
}
?>

</select>
</form>

</body>
</html>



