<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4 - Types</title>
</head>
<body>
    <h1>Exercice 4</h1>
    <?php
    $entier = 42;
    $chaine = "42";
    $decimal = 15.8;
    $vrai = true;
    $faux = false;
    $vide = null;
    ?>
    <h2>Types et valeurs (var_dump)</h2>
<?php
var_dump($entier);
var_dump($chaine);
var_dump($decimal);
var_dump($vrai);
var_dump($faux);
var_dump($vide);
?>
    

    <h2>Conversions</h2>
    
"42" en entier :
<?php var_dump((int) $chaine); ?>
15.8 en entier :
<?php var_dump((int) $decimal); ?>
42 en chaîne :
<?php var_dump((string) $entier); ?>
    <h2>true et false : echo puis var_dump</h2>
    <p>echo true : "<?php echo true; ?>"</p>
    <p>echo false : "<?php echo false; ?>"</p>
<?php
var_dump(true);
var_dump(false);
?>
    <h2>Conversion en booléen</h2>
0 :
<?php var_dump((bool) 0); ?>"0" :
<?php var_dump((bool) "0"); ?>"PHP" :
<?php var_dump((bool) "PHP"); ?>[] :
<?php var_dump((bool) []); ?>
    </pre>
</body>
</html>
