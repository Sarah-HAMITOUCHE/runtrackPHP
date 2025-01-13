<?php
// Créer une variable str et afficher son contenu
$str = "LaPlateforme";
echo $str;


// Créer les variables str2 et str3, puis les concaténer pour afficher "Vive LaPlateforme !"
$str2 = "Vive";
$str3 = "!";
echo $str2 . " " . $str . " " . $str3; // Concaténation des variables


// Créer une variable val, afficher sa valeur, ajouter 4 et afficher à nouveau
$val = 6;
echo $val; // Affichage de la valeur initiale de val
echo "<br>";
$val += 4; // Ajouter 4 à la variable val
echo $val; // Affichage de la nouvelle valeur de val


// Créer une variable myBool, afficher sa valeur, puis modifier sa valeur
$myBool = true;
echo $myBool ? "true" : "false"; // Affichage de true ou false selon la valeur de myBool
$myBool = false;
echo $myBool ? "true" : "false"; // Affichage de true ou false après avoir modifié la variable
?>