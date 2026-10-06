<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3 - Constantes</title>
</head>
<body>
    <h1>Exercice 3</h1>
    <?php
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");

    $prixUnitaireHT = 60;
    $quantite = 3;

    $totalHT = $prixUnitaireHT * $quantite;
    $montantTVA = $totalHT * TAUX_TVA / 100;
    $totalTTC = $totalHT + $montantTVA;

    $montantFinal = $totalTTC;
    $montantFinal += 15;
    ?>
    <ul>
        <li>Prix unitaire HT : <?= $prixUnitaireHT . " " . DEVISE ?></li>
        <li>Quantité : <?= $quantite ?></li>
        <li>Total HT : <?= $totalHT . " " . DEVISE ?></li>
        <li>TVA (<?= TAUX_TVA ?> %) : <?= $montantTVA . " " . DEVISE ?></li>
        <li>Total TTC : <?= $totalTTC . " " . DEVISE ?></li>
        <li>Frais de livraison : 15 <?= DEVISE ?></li>
        <li><strong>Montant final : <?= $montantFinal . " " . DEVISE ?></strong></li>
    </ul>
    <p>
        <?php
        if (defined("TAUX_TVA")) {
            echo "La constante TAUX_TVA existe.";
        } else {
            echo "La constante TAUX_TVA n'existe pas.";
        }
        ?>
    </p>
</body>
</html>
