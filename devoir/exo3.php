<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 : Tirages aléatoires</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            max-width: 600px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        input[type="number"] {
            width: 90%;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            color: black;
            background-color: skyblue;
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
            font-size: 16px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        td {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tirages Aléatoires</h1>
        <form method="POST">
            <label for="nombre">Entrez un nombre à trois chiffres :</label>
            <input type="number" id="nombre" name="nombre" placeholder="Exemple : 123" min="100" max="999" required>
            <button type="submit">Effectuer les tirages</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $target = intval($_POST['nombre']);
            if ($target < 100 || $target > 999) {
                echo "<p class='result'>Veuillez entrer un nombre valide (entre 100 et 999).</p>";
                return;
            }
            $tirages_while = 0;
            $random = null;
            do {
                $random = rand(100, 999);
                $tirages_while++;
            } while ($random !== $target);
            $tirages_for = 0;
            $random = null;
            for ($random = rand(100, 999); $random !== $target; $random = rand(100, 999)) {
                $tirages_for++;
            }
            $tirages_for++; 
            echo "<div class='result'>";
            echo "<h2>Résultats :</h2>";
            echo "<table>";
            echo "<tr><th>Méthode</th><th>Nombre de Tirages</th></tr>";
            echo "<tr><td>Boucle WHILE</td><td>$tirages_while</td></tr>";
            echo "<tr><td>Boucle FOR</td><td>$tirages_for</td></tr>";
            echo "</table>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>