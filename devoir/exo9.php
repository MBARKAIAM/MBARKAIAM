<?php
// Initialisation du tableau multidimensionnel associatif
$personnes = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les informations saisies par l'utilisateur
    $nom = ($_POST['nom']);
    $prenom = ($_POST['prenom']);
    $ville = ($_POST['ville']);
    $age = (int)$_POST['age'];

    // Ajouter la nouvelle personne au tableau
    $personnes[$nom] = [
        'prénom' => $prenom,
        'ville' => $ville,
        'âge' => $age
    ];

    // Sauvegarder les informations dans une session pour pouvoir les afficher après soumission
    session_start();
    $_SESSION['personnes'] = $personnes;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tableau Associatif Multidimensionnel</title>
    <style>
        body {
            
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
          
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: white;

           
           
        }
        .formulaire {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            width: 400px;
            height: auto;
            left: 35%;
            position: absolute;
            border-radius:50px;

           
            
        }
        .formulaire label {
            display: block;
            margin: 10px 0 5px;
        }
        .formulaire input[type="number"], .formulaire input[type="text"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            
        }
        .formulaire input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: skyblue;
            color: black;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1> RENSEIGNER LE FORMULAIRE SUIVANT </h1>

    <!-- Formulaire de saisie des informations -->
   <div class="formulaire" >
    <form method="post">
        <label for="nom">Nom  :</label><br>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom :</label><br>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="ville">Ville de résidence :</label><br>
        <input type="text" id="ville" name="ville" required><br><br>

        <label for="age">Âge :</label><br>
        <input type="number" id="age" name="age" required><br><br>

        <input type="submit" value="Ajouter">
    </form>
    </div>

    <?php
    if (isset($_SESSION['personnes']) && !empty($_SESSION['personnes'])) {
        echo "<h2> Tu as été ajouté :</h2>";
        echo "<ul>";
        foreach ($_SESSION['personnes'] as $nom => $infos) {
            echo "<li><strong>$nom</strong> : Prénom = {$infos['prénom']}, Ville = {$infos['ville']}, Âge = {$infos['âge']}</li>";
        }

        echo "</ul>";
    }
    ?>
    <p>
                <a href="Accueil.php"> Retour à la page d'accueil</a>
            </p>
        

</body>
</html>
