<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 12 : Adresse Client</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: skyblue; }
        .container { max-width: 600px; margin: 50px auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 8px; text-align: left; border: 1px solid #ddd; }
        .buttom{
            background-color: skyblue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulaire d'adresse client</h1>
        <form method="POST">
            <label for="nom">Nom :</label><br>
            <input type="text" id="nom" name="nom" > <br><br>

            <label for="prenom">Prénom : </label><br>
            <input type="text" id="prenom" name="prenom" required> <br><br>

            <label for="adresse">Adresse : </label><br>
            <input type="text" id="Adresse" name="Adresse" required> <br><br>
            <label for="ville">Ville : </label><br>
            <input type="text" id="Ville" name="Ville" required> <br><br>
            <label for="code postal">Code Postal : </label><br>
            <input type="text" id="codepostapal" name="codepostal" required> <br><br>
            <button type="submit">Soumettre</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo "<h2>Résumé</h2><table>";
            echo "<tr><th>Champ</th><th>Valeur</th></tr>";
            foreach ($_POST as $key => $value) {
                echo "<tr><td>".ucfirst($key)."</td><td>$value</td></tr>";
            }
            echo "</table>";
        }
        ?>
        <p>
                <a href="Accueil.php"> Retour à la page d'accueil</a>
            </p>
        
    </div>
</body>
</html>
