<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques sur une Liste de Nombres</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: skyblue;
        }
        .container {
            background: white;
            padding: 50px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 50px;
            text-align: center;
        }
        input[type="text"] {
            padding: 10px;
            width: 80%;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            background: skyblue;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
        .result {
            margin-top: 20px;
        }
        .result p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calcul de La Moyenne , du Maximum et du Minimum</h1>
        <form method="POST">
            <input type="text" name="nombres" placeholder="Entrez des nombres séparés par des espaces" required>
            <button type="submit">Calculer</button>
        </form>

        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $input = trim($_POST["nombres"]);
                $nombres = array_map('floatval', explode(' ', $input));

                if (count($nombres) > 0) {
                    $moyenne = array_sum($nombres) / count($nombres);
                    $maximum = max($nombres);
                    $minimum = min($nombres);

                    echo "<p><strong>Moyenne :</strong> $moyenne</p>";
                    echo "<p><strong>Maximum :</strong> $maximum</p>";
                    echo "<p><strong>Minimum :</strong> $minimum</p>";
                } else {
                    echo "<p>Veuillez entrer une liste valide de nombres.</p>";
                }
            }
            ?>
            <p>
                <a href="Accueil.php">Retour à la page d'accueil</a>
            </p>
        
        </div>
    </div>
</body>
</html>
