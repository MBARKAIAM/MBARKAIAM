<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jours Restants</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color:skyblue;
        }
        .container {
            background: white;
            padding: 50px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }
        input[type="date"] {
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
        <h1>Jours Restants Jusqu'à la Fin de l'Année</h1>
        <form method="POST">
            <input type="date" name="date" required>
            <button type="submit">Calculer</button>
        </form>

        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $dateSaisie = new DateTime($_POST["date"]);
                $finAnnee = new DateTime($dateSaisie->format("Y") . "-12-31");
                $joursRestants = $finAnnee->diff($dateSaisie)->days;

                echo "<p>Nombre de jours restants jusqu'à la fin de l'année : <strong>$joursRestants</strong></p>";
            }
            ?>
            <p>
                <a href="Accueil.php"> Retour à la page d'accueil</a>
            </p>
        
        </div>
    </div>
</body>
</html>
