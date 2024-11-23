<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 : Palindrome</title>
    <style>
        body { font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0; 
            background-color: skyblue; }
        .container { max-width: 500px; 
            margin: 100px auto; 
            padding: 50px; 
            background: white; 
            border-radius: 50px; 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); }
        form { display: flex;
             flex-direction: column; 
             gap: 15px; }
        input[type="text"], 
        button { padding: 10px; font-size: 16px; border-radius: 5px; border: 1px solid #ccc; }
        button { background:skyblue; color: black; cursor: pointer; }
        button:hover { background: #0056b3; }
        .result { margin-top: 20px; font-size: 18px; text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Vérification d'un palindrome</h1>
        <h1> un palindrpme c'est un Mot ou groupe de mots qui peut se lire indifféremment de gauche à droite ou de droite à gauche en gardant le même sens (ex. la mariée ira mal ; Roma Amor).</h1>
        <form method="POST">
            <input type="text" name="mot" placeholder="Entrez un mot" required>
            <button type="submit">Vérifier</button>
        </form>
        <div class="result">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $mot = strtolower(preg_replace('/[^a-z]/i', '', $_POST['mot']));
                $inverse = strrev($mot);
                if ($mot === $inverse) {
                    echo "Le mot est un palindrome";
                } else {
                    echo "Le mot n'est pas un palindrome";
                }
            }
            ?>
            <p>
                <a href="Accueil.php"> RETOUR A LA PAGE D'ACCUEIL</a>
            </p>
        
        </div>
    </div>
</body>
</html>
