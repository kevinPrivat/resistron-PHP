<?php
const KILO = 1_000;
const MEGA = 1_000_000;
const GIGA = 1_000_000_000;
const MILI = 1/KILO;

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
    }
    ?>><?= $color ?></option>
<?php
}

$number1 = $color_ring12[$ring1] ?? 0;
$number2 = $color_ring12[$ring2] ?? 0;
$multiple = $color_ring3[$ring3] ?? 0;
$tolerance = $color_ring4[$ring4] ?? 0;

$resistance = ($number1 . $number2) * $multiple;

$divisor = 1;
$unit = "";

if ($resistance >= GIGA) { 
    $divisor = GIGA;
    $unit = "G";
} else if ($resistance >= MEGA) {
    $divisor = MEGA;
    $unit = "M";
} else if ($resistance >= KILO) {
    $divisor = KILO;
    $unit = "K";
} else if ($resistance < 1) {
    $divisor = MILI;
    $unit = "m";
}

?><!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resistron</title>
    <style>
        html, body {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100vw;
            /* background: no-repeat url("images/resistance-taille-mesure.png") center; */
        
        }

        img {
            position: absolute;  

        }

        form {
            z-index: 100;
        }
        form select, button {
            display: flex;
            flex-direction: column;
            margin: 25px auto;
        }

        button {
            width: 120px;
            text-align: center;
        }

        label {
            font-size: 1rem;
            padding-right: 10px;
        }

        select {
            font-size: 0.9rem;
            padding: 2px 5px;
            border: 0;
        }
    </style>

</head>

<body>
    <img src="images/resistance-taille-mesure.png" alt="">

    <form action="" method="get">

        <select name="ring1" id="color-select1" onchange="this.form.submit();">
            <option value="">-- Anneau 1 --</option>
            <?php
            foreach ($color_ring12 as $color => $value) {
                option($ring1, $color);
            } ?>
        </select>

        <select name="ring2" id="color-select2" onchange="this.form.submit();">
            <option value="">-- Anneau 2 --</option>
            <?php
            foreach ($color_ring12 as $color => $value) {
                option($ring2, $color);
            } ?>

        </select>

        <select name="ring3" id="color-select3" onchange="this.form.submit();">
            <option value="">-- Anneau 3--</option>
            <?php
            foreach ($color_ring3 as $color => $value) {
                option($ring3, $color);
            } ?>
        </select>

        <select name="ring4" id="color-select4" onchange="this.form.submit();">

            <option value="">-- Anneau 4--</option>
            <?php
            foreach ($color_ring4 as $color => $value) {
                option($ring4, $color);
            } ?>
        </select>

        <br>
        <label><input type="number" value="<?= $resistance/$divisor ?>" disabled><?=$unit?>Ω</label>
        <label>±<input type="number" value="<?= $tolerance ?>" disabled>%</label>

    </form>
    <script src="code.js"></script>
</body>

</html>