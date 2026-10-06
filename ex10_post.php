<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat POST</title>
</head>
<body>
<?php
if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["groupe"])) {
    $nom = trim($_POST["nom"]);
    $prenom = trim($_POST["prenom"]);
    $groupe = trim($_POST["groupe"]);

    if ($nom == "" || $prenom == "" || $groupe == "") {
        echo "Erreur : tous les champs sont obligatoires.";
    } else {
        $nom = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
        $prenom = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
        $groupe = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');
        echo "Bienvenue " . $prenom . " " . $nom . " du groupe " . $groupe . " !";
    }
} else {
    echo "Aucune donnée reçue. Utilisez le formulaire ex10_post.html.";
}
?>
</body>
</html>
