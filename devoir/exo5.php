<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propriétés d'un Cercle</title>
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
            max-whidth:500px;
            background: white;
            padding: 50px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 50px;
            text-align: center;
        }
        input[type="number"] {
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
            background: skyblue;
        }
        .result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Propriétés d'un Cercle</h1>
        <form method="POST">
            <input type="number" name="rayon" placeholder="Entrez le rayon du cercle" required>
            <button type="submit">Calculer</button>
        </form>

        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $rayon = floatval($_POST["rayon"]);
                $diametre = 2 * $rayon;
                $perimetre = 2 * pi() * $rayon;
                $surface = pi() * pow($rayon, 2);

                echo "<p><strong>Diamètre :</strong> $diametre</p>";
                echo "<p><strong>Périmètre :</strong> " . number_format($perimetre, 2) . "</p>";
                echo "<p><strong>Surface :</strong> " . number_format($surface, 2) . "</p>";
            }
            ?>
            <p>
                <a href="Accueil.php"> Retour à la page d'accueil</a>
            </p>
        
        </div>
    </div>
</body>
</html>
