<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de Voyelles et Consonnes</title>
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
            background:white;
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
            padding: 5px;
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
        <h1>Nombre de Voyelles et Consonnes</h1>
        <form method="POST">
            <input type="text" name="chaine" placeholder="Entrez une chaîne de caractères" required>
            <button type="submit">Analyser</button>
        </form>

        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $chaine = strtolower(trim($_POST["chaine"]));
                $voyelles = 0;
                $consonnes = 0;

                foreach (str_split($chaine) as $char) {
                    if (ctype_alpha($char)) {
                        if (in_array($char, ['a', 'e', 'i', 'o', 'u', 'y'])) {
                            $voyelles++;
                        } else {
                            $consonnes++;
                        }
                    }
                }

                echo "<p>Nombre de voyelles : <strong>$voyelles</strong></p>";
                echo "<p>Nombre de consonnes : <strong>$consonnes</strong></p>";
            }
            ?>
            <p>
                <a href="Accueil.php"> Retour à la page d'accueil</a>
            </p>
        
        </div>
    </div>
</body>
</html>
