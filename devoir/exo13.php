<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 13 : Tableau Statistiques</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: skyblue;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 600px;
            background: white;
            padding: 50px;
            border-radius: 50px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        input[type="text"] {
            width: 90%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            color: black;
            background-color:skyblue;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: skyblue;
        }
        .result {
            margin-top: 20px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>CALCUL DE LA MOYENNE, MAXIMUM ET LE MINIMUM</h1>
        <form method="POST">
            <input type="text" name="nombres" placeholder="Entrez des nombres séparés par des espaces" required>
            <button type="submit">Calculer</button>
        </form>
        <div class="result">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nombres = array_map('floatval', explode(' ', $_POST['nombres']));
                $moyenne = array_sum($nombres) / count($nombres);
                echo "<p><strong>Moyenne :</strong> " . number_format($moyenne, 2) . "</p>";
                echo "<p><strong>Maximum :</strong> " . max($nombres) . "</p>";
                echo "<p><strong>Minimum :</strong> " . min($nombres) . "</p>";
            }
            ?>
            <p>
                <a href="Accueil.php"> Retourner à la page d'accueil</a>
            </p>
        
        </div>
    </div>
</body>
</html>
