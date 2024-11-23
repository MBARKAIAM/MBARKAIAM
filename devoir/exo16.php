<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 16 : Transformation de Chaînes</title>
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
            max-width: 500px;
            background: white;
            padding: 50px;
            border-radius: 16px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        textarea {
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
            color:black;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Transformation de Chaînes</h1>
        <form method="POST">
            <textarea name="strings" rows="5" placeholder="Entrez plusieurs mots ou phrases, séparés par une virgule" required></textarea>
            <button type="submit">Transformer</button>
        </form>
        <div class="result">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $strings = explode(',', $_POST['strings']);
                function transformStrings(&$array) {
                    foreach ($array as &$string) {
                        $string = ucfirst(strtolower(trim($string)));
                    }
                }
                transformStrings($strings);
                echo "<h2>Résultat :</h2>";
                echo "<ul>";
                foreach ($strings as $string) {
                    echo "<li>$string</li>";
                }
                echo "</ul>";
            }
            ?>
             <p>
                <a href="Accueil.php"> Retour à la page d'accueil</a>
            </p>
        
        </div>
    </div>
</body>
</html>
