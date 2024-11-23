<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du PPCM</title>
    
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
        .li{
            padding: 10px 20px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<ul>
       
        </ul>
    <div class="container">
        <h1>Calcul du PPCM</h1>
        
        <form method="POST">
            <input type="number" name="nombre1" placeholder="Entrez le premier nombre" required>
            <input type="number" name="nombre2" placeholder="Entrez le second nombre" required>
            <button type="submit">Calculer</button>
        </form>

        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $a = intval($_POST["nombre1"]);
                $b = intval($_POST["nombre2"]);

                function ppcm($a, $b) {
                    $produit = $a * $b;
                    while ($b != 0) {
                        $reste = $a % $b;
                        $a = $b;
                        $b = $reste;
                    }
                    return $produit / $a;
                }

                $resultat = ppcm($a, $b);
                echo "<p>Le PPCM de $a et $b est <strong>$resultat</strong>.</p>";
            }
            ?>
            <p>
                <a href="Accueil.php"> Retour à la page d'accueil</a>
            </p>
        
        </div>
    </div>
</body>
</html>
