<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat GET</title>
</head>
<body>
<?php
if (isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["groupe"])) {
    $nom = trim($_GET["nom"]);
    $prenom = trim($_GET["prenom"]);
    $groupe = trim($_GET["groupe"]);

    if ($nom == "" || $prenom == "" || $groupe == "") {
        echo "Erreur : tous les champs sont obligatoires.";
    } else {
        $nom = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
        $prenom = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
        $groupe = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');
        echo "Bienvenue " . $prenom . " " . $nom . " du groupe " . $groupe . " !";
    }
} else {
    echo "Aucune donnée reçue. Utilisez le formulaire ex10_get.html.";
}
?>
</body>
</html>
