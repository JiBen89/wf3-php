<?php
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WF3 - PHP</title>
</head>

<body>
  <h1>Coucou</h1>
  <h2>
    <?php echo "Coucou"; ?>
  </h2>
  <?php
  // Une variable est toujours préfixée par $
  $numero = 1;
  // L'opérateur de concaténation est le point (.)
  echo "Numéro : " . $numero;
  echo "<br />";
  // Avec des guillemets doubles, une variable PHP va être interprétée
  $numero = 2; // Je peux changer la valeur d'une variable
  echo "Numéro : $numero";
  echo "<br />";
  // Les 3 lignes suivantes sont équivalentes : elles font la même chose
  $numero = $numero + 1;
  $numero += 1;
  $numero++;
  // Avec des guillemets simples, on va devoir utiliser la concaténation
  echo 'Numéro : ' . $numero;
  echo "<br />";

  // Une constante ne peut pas être modifiée
  const MA_CONSTANTE = 'Valeur';

  $registered = false; // booléen
  $name = "John"; // string
  $age = 26; // integer
  $weight = 65.2; // float

  $a = "3"; // Chaîne de caractères
  $b = 3; // Nombre entier
  // Comparaison : deux signes "égal" côte à côte
  var_dump($a == $b);
  // Comparaison stricte : TROIS signes "égal" côte à côte
  var_dump($a === $b);

  echo "<br />";
  direBonjour();
  direBonjour("Lucas");
  direBonjour("Toto");
  direBonjour("Tata");
  ?>
</body>

</html>