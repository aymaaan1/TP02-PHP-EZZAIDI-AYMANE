<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8 - Boucles et contrôle</title>
</head>
<body>
    <h1>Exercice 8</h1>

    <h2>Partie 1 : nombres pairs de 0 à 20</h2>
    <p>
    <?php
    $i = 0;
    while ($i <= 20) {
        if ($i === 10) {
            echo "<strong>$i</strong> ";
        } else {
            echo "$i ";
        }
        $i += 2;
    }
    ?>
    </p>

    <h2>Partie 2 : while et do-while</h2>
    <?php
    $compteur = 5;
    $executionsWhile = 0;
    while ($compteur < 5) {
        $executionsWhile++;
    }

    $compteur = 5;
    $executionsDoWhile = 0;
    do {
        $executionsDoWhile++;
    } while ($compteur < 5);

    echo "<p>while : $executionsWhile exécution(s)</p>";
    echo "<p>do-while : $executionsDoWhile exécution(s)</p>";
    ?>

    <h2>Partie 3 : continue et break</h2>
    <p>
    <?php
    for ($i = 1; $i <= 20; $i++) {
        if ($i >= 16) {
            break;
        }
        if ($i % 3 === 0) {
            continue;
        }
        echo "$i ";
    }
    ?>
    </p>
</body>
</html>
