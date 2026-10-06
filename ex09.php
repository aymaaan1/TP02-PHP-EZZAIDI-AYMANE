<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9 - Tableau associatif</title>
    <style>
        table { border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 6px 12px; }
    </style>
</head>
<body>
    <h1>Exercice 9</h1>
    <?php
    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];

    $somme = 0;
    $nbValides = 0;
    $meilleureNote = null;
    $meilleurEtudiant = "";
    ?>
    <table>
        <tr><th>Étudiant</th><th>Note</th><th>Validé</th></tr>
        <?php foreach ($notes as $nom => $note): ?>
            <?php
            $somme += $note;
            $valide = $note >= 10;
            if ($valide) {
                $nbValides++;
            }
            if ($meilleureNote === null || $note > $meilleureNote) {
                $meilleureNote = $note;
                $meilleurEtudiant = $nom;
            }
            ?>
            <tr>
                <td><?= $nom ?></td>
                <td><?= $note ?></td>
                <td><?= $valide ? "Validé" : "Non validé" ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?php $moyenne = $somme / count($notes); ?>
    <p>Somme des notes : <?= $somme ?></p>
    <p>Moyenne de la classe : <?= $moyenne ?></p>
    <p>Étudiants ayant validé : <?= $nbValides ?></p>
    <p>Meilleure note : <?= $meilleureNote ?> (<?= $meilleurEtudiant ?>)</p>
</body>
</html>
