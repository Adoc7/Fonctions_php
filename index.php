<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>FONCTIONS</title>
</head>
<body>

<!-- Exercice 1 -->
<?php
// Fonction qui retourne "true"
function vrai() {
  return true;
  }
echo vrai();
?>
</br>
<!-- Exercice 2 -->
<?php
// Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.
function car() {
  return "Bonjour, ceci est une chaîne de caractères.";
}
  echo car();
?>

</br>
<!-- Exercice 3 -->
<?php
// Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines
function bar() {
return "Bonjour"." "."un café?";
}
echo bar();
?>
</br>
<!-- Exercice 4 -->
<?php
// Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
//
//     Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
//     Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
//     Les deux nombres sont identiques si les deux nombres sont égaux

function comparer($a=10,$b=20) {
  if ($a>$b) {
      echo "Le premier nombre est plus grand.";
  } elseif ($a<$b) {
    echo "Le premier nombre est plus petit.";
  }else {
    echo "Le premier nombre est plus petit.";
  }
}
echo comparer();
?>

</br>
<!-- Exercice 5 -->
<?php
// Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.
function mel_nbr_car($car="chiffre",$chif=10) {
return $car.$chif;
}
echo mel_nbr_car();
?>
</br>

<!-- Exercice 6 -->
<?php
// Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines
function chaine_caract($name="Adoc7",$surname="captain",$age=70) {
return "Bonjour "."".$name." ".$surname." ,tu as ".$age." ans.";
}
echo chaine_caract();
?>
</br>

<!-- Exercice 7 -->
<?php
// Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre comme valeur :
//
//     Homme
//     Femme
//
// La fonction doit renvoyer en fonction des paramètres :
//
//     Vous êtes un homme et vous êtes majeur
//     Vous êtes un homme et vous êtes mineur
//     Vous êtes une femme et vous êtes majeur
//     Vous êtes une femme et vous êtes mineur
// Gérer tous les cas.
function genre_age($genre,$age) {
  if ($genre=="homme" && $age>=18) {
      return " Vous êtes un homme et vous êtes majeur.";
  } elseif ($genre=="homme" && $age<18) {
    return " Vous êtes un homme et vous êtes mineur.";
  } elseif ($genre=="femme" && $age>=18) {
    return " Vous êtes une femme et vous êtes majeur.";
  }else {
    return "Vous êtes une femme et vous êtes mineur.";
  }
}
echo genre_age("homme",24);
?>

</br>
<!-- Exercice 8 -->
<?php
// Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
//Tous les paramètres doivent avoir une valeur par défaut.
$a=42;
$b=33;
$c=5;
function nombres($a,$b,$c) {
return $a+$b+$c;
}
echo nombres($a,$b,$c);
?>
