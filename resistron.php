<?php
const KILO = 1_000;
const MEGA = 1_000_000;
const GIGA = 1_000_000_000;

$ring1 = isset($_GET['ring1']) ? $_GET['ring1'] : null;
if (isset($_GET['ring1'])) {
    $ring = $_GET['ring1'];
} else {
    $ring = null;
}

$ring1 = $_GET['ring1'] ?? null;
$ring2 = $_GET['ring2'] ?? null;
$ring3 = $_GET['ring3'] ?? null;
$ring4 = $_GET['ring4'] ?? null;

$color_ring12 = ["noir" => 0, "brun" => 1, "rouge" => 2, "orange" => 3, "jaune" => 4, "vert" => 5, "bleu" => 6, "violet" => 7, "gris" => 8, "blanc" => 9];
$color_ring3 = [
    "noir"   => 1,        "brun"   => 10,        "rouge" => 100,
    "orange" => 1 * KILO, "jaune"  => 10 * KILO, "vert"  => 100 * KILO,
    "bleu"   => 1 * MEGA, "violet" => 10 * MEGA, "gris"  => 100 * MEGA,
    "blanc"  => 1 * GIGA,
    "or" => 0.1, "argent" => 0.01
];
$color_ring4 = ["brun" => 1, "rouge" => 2, "vert" => 0.5, "bleu" => 0.25, "violet" => 0.10, "gris" => 0.05, "or" => 5, "argent" => 10];


function option($ring, $color) { ?>
    <option value="<?= $color ?>" 
    <?php if ($ring == $color) { 
        echo ' selected="selected"';
    } ?>></option>
<?php
}

$number1 = $ColorRing12[$ring1] ?? null;
$number2 = $ColorRing12[$ring2] ?? null;
$multiple = $ColorRing3[$ring3] ?? null;
$tolerance = $ColorRing4[$ring4] ?? null;

echo $number1 . $number2 * $multiple;
echo $tolerance;

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

        <select name="ring1" id="color-select1">
            <option value="">-- Anneau 1 --</option>
            <?php
            foreach ($color_ring12 as $color => $value) {
                option($ring1, $color);
            } ?>
        </select>

        <select name="ring2" id="color-select2">
            <option value="">-- Anneau 2 --</option>
            <?php
            foreach ($color_ring12 as $color => $value) {
                option($ring2, $color);
            } ?>

        </select>

        <select name="ring3" id="color-select3">
            <option value="">-- Anneau 3--</option>
            <?php
            foreach ($color_ring3 as $color => $value) {
                option($ring3, $color);
            } ?>
        </select>

        <select name="ring4" id="color-select4">

            <option value="">-- Anneau 4--</option>
            <?php
            foreach ($color_ring4 as $color => $value) {
                option($ring4, $color);
            } ?>

        </select>

        <input type="submit" value="submit">
    </form>

</body>

</html>