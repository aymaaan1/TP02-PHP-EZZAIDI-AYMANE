<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2 - Variables</title>
</head>
<body>
    <h1>Exercice 2</h1>
    <?php
    $nom = "Alaoui";
    $prenom = "Karim";
    $age = 20;
    $formation = "Développement web";

    $phrase = "Je m'appelle" . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis en " . $formation . ". ";
    $phrase .= "J'apprends PHP";
    echo "<p>$phrase</p>";

    $note = 12;
    $Note = 16;
    echo "<p>\$note = $note</p>";
    echo "<p>\$Note = $Note</p>";
    ?>
</body>
</html>
