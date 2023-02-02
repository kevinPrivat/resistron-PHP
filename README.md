# resistron-PHP

# Résistance
Ce code PHP calcule la valeur d'une résistance en fonction des codes couleurs de ses 4 anneaux.

## Constantes
KILO représente 1 000
MEGA représente 1 000 000
GIGA représente 1 000 000 000
MILI représente 1/1 000

## Variables
$ring1 à $ring4 représentent le code couleur de chaque anneau de la résistance.
$color_ring12 est un tableau associatif qui associe les codes de couleur des deux premiers anneaux à un nombre.
$color_ring3 est un tableau associatif qui associe les codes de couleur du troisième anneau à un multiple de KILO, MEGA ou GIGA.
$color_ring4 est un tableau associatif qui associe les codes de couleur du quatrième anneau à une tolérance.
$multiple est la valeur du troisième anneau.
$tolerance est la valeur du quatrième anneau.
$resistance est la valeur de résistance calculée en multipliant $number1 et $number2 par $multiple.
$divisor est une valeur utilisée pour convertir la résistance en une unité avec un préfixe métrique.
$unit est le préfixe métrique de la valeur de résistance (par exemple K, M, G).

## HTML
Le code génère un formulaire HTML qui permet à l'utilisateur de sélectionner les codes de couleur des quatre anneaux et affiche la valeur de résistance calculée.