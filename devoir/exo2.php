<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 : Multiples de 3 et 5</title>
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
            margin: 200px auto;
            background: white;
            padding: 50px;
            border-radius: 50px;
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
            font-size: 18px;
        }
        .success {
            color: #28a745;
        }
        .error {
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tester un Multiple de 3 et 5</h1>
        <form method="POST">
            <input type="number" name="nombre" placeholder="Entrez un nombre" required>
            <button type="submit">Tester</button>
        </form>
        <div class="result">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nombre = intval($_POST['nombre']);
                if ($nombre % 3 === 0 && $nombre % 5 === 0) {
                    echo "<p class='success'>$nombre est un multiple de 3 et de 5.</p>";
                } else {
                    echo "<p class='error'>$nombre n'est pas un multiple de 3 et de 5.</p>";
                }
            }
            ?>
            <p>
                <a href="Accueil.php"> Retour à la page d'accueil</a>
            </p>
        
        </div>
    </div>
</body>²²²²²²
</html>
