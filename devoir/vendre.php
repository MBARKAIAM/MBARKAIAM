<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendre un Bien</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        input[type="file"] {
            margin-bottom: 15px;
            font-size: 16px;
        }
        button {
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 20px;
        }
        .back-link {
            margin-top: 20px;
            display: inline-block;
            font-size: 16px;
            color: #007bff;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
            color: #0056b3;
        }
        .success {
            color: #28a745;
            font-weight: bold;
            margin-top: 15px;
        }
        .error {
            color: #dc3545;
            font-weight: bold;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Vendre un Bien Immobilier</h1>
        <p>Téléversez une image de votre bien pour le mettre en vente.</p>

        <!-- Formulaire de téléversement -->
        <form action="vendre.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" accept="image/*" required><br>
            <button type="submit">Téléverser l'image</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
            $uploadDir = 'uploads/';
            $uploadFile = $uploadDir . basename($_FILES['image']['name']);

            // Vérifie si le répertoire "uploads" existe, sinon le créer
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            // Vérifie si le fichier a été téléversé avec succès
            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                echo "<p class='success'>Image téléversée avec succès !</p>";
                echo "<img src=\"$uploadFile\" alt=\"Votre bien à vendre\">";
            } else {
                echo "<p class='error'>Une erreur est survenue lors du téléversement. Veuillez réessayer.</p>";
            }
        }
        ?>

        <a href="exo15.php" class="back-link">Retour à la page d'accueil</a>
    </div>
</body>
</html>