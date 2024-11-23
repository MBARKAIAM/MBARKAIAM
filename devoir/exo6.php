<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diviseurs d'un Nombre</title>
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
            margin:100px auto;
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
        <h1>Diviseurs d'un Nombre</h1>
        <form method="POST">
            <input type="number" name="nombre" placeholder="Entrez un nombre" required>
            <button type="submit">Afficher les diviseurs</button>
        </form>

        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $nombre = intval($_POST["nombre"]);
                if ($nombre > 0) {
                    echo "<p>Les diviseurs de <strong>$nombre</strong> sont :</p>";
                    echo "<ul>";
                    for ($i = 1; $i <= $nombre; $i++) {
                        if ($nombre % $i == 0) {
                            echo "<li>$i</li>";
                        }
                    }
                    echo "</ul>";
                } else {
                    echo "<p>Veuillez entrer un nombre valide.</p>";
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

