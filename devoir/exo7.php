<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Nombre Parfait</title>
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
            max-width:500px;
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
        <h1>Test d'un Nombre Parfait</h1>
        <form method="POST">
            <input type="number" name="nombre" placeholder="Entrez un nombre" required>
            <button type="submit">Tester</button>
        </form>

        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $nombre = intval($_POST["nombre"]);
                $sommeDiviseurs = 0;

                for ($i = 1; $i < $nombre; $i++) {
                    if ($nombre % $i === 0) {
                        $sommeDiviseurs += $i;
                    }
                }

                if ($sommeDiviseurs === $nombre) {
                    echo "<p><strong>$nombre</strong> est un nombre parfait.</p>";
                } else {
                    echo "<p><strong>$nombre</strong> n'est pas un nombre parfait.</p>";
                }
            }
            ?>
            <p>
                <a href="Accueil.php"> Retour à la page d'accueil</a>
            </p>
        
        </div>
    </div>
</body>
</html>
