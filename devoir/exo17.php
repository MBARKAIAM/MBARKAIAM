<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de Sinus</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #87CEEB;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 1.5em;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select, button {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        button {
            background-color: #007BFF;
            color: white;
            cursor: pointer;
            border: none;
        }

        button:hover {
            background-color: #0056b3;
        }

        .result {
            text-align: center;
            margin-top: 20px;
        }

        .result a {
            color: blue;
            text-decoration: none;
        }

        .result a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calcul du Sinus</h1>
        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        function calculer_sinus($angle, $unite = 'r') {
            switch ($unite) {
                case 'd': 
                    $angle = deg2rad($angle);
                    break;
                case 'g': 
                    $angle = $angle * (pi() / 200);
                    break;

            }
            return sin($angle);
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $angle = isset($_POST["angle"]) ? floatval($_POST["angle"]) : null;
            $unite = isset($_POST["unite"]) ? $_POST["unite"] : 'r';

            if ($angle !== null) {
                $resultat = calculer_sinus($angle, $unite);
                echo "<div class='result'>";
                echo "<h2>Résultat</h2>";
                echo "<p>Le sinus de $angle ({$unite}) est : $resultat</p>";
                echo "<a href=exo17.php > partir sur la page du calcul </a>";
                echo "</div>";
            } else {
                echo "<p>Veuillez saisir un angle valide.</p>";
            }
        } else {
        ?>
        <form action="exo17.php" method="POST">
            <label for="angle">Angle :</label>
            <input type="number" id="angle" name="angle" required step="any">
            
            <label for="unite">Unité :</label>
            <select id="unite" name="unite">
                <option value="r">Radian</option>
                <option value="d">Degré</option>
                <option value="g">Grade</option>
            </select>
            
            <button type="submit">Calculer</button>
        </form>
        <?php } ?>
        <p>
                <a href="Accueil.php"> Retour à la page d'accueil</a>
            </p>
    </div>
</body>
</html>
