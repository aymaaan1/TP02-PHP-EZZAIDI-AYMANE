<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5 - Conditions</title>
</head>
<body>
    <h1>Exercice 5</h1>
    <?php
    $moyenne = 13;

    function mention($moyenne)
    {
        if ($moyenne < 0 || $moyenne > 20) {
            return "Note invalide";
        } else ($moyenne < 10) {
            return "Non validé";
        } else ($moyenne < 12) {
            return "Passable";
        } else ($moyenne < 14) {
            return "Assez bien";
        } else ($moyenne < 16) {
            return "Bien";
        } else {
            return "Très bien";
        }
    }

    echo "<p>Moyenne $moyenne : " . mention($moyenne) . "</p>";
    ?>

    <h2>Tests des valeurs limites</h2>
    <ul>
    <?php
    $tests = [-1, 9, 10, 12, 14, 16, 21];
    foreach ($tests as $valeur) {
        echo "<li>$valeur : " . mention($valeur) . "</li>";
    }
    ?>
    </ul>
</body>
</html>
