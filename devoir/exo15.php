<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Immobilière</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 500px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        button {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenue sur notre page d’accueil   
        Nous sommes ravis de vous accueillir sur le site de notre agence immobilière. 
        Ici, nous vous proposons des solutions adaptées pour tous vos projets immobiliers, qu’il s’agisse de vendre, acheter, ou louer un bien.
        </h1>
        <p> Naviguez facilement entre ces options grâce aux boutons ci-dessous</p>
        <form action="redirection.php" method="POST">
            <button name="action" value="vendre"> <a href="vendre.php" > Vendre </a></button>
            <button  name="action" value="acheter"> <a href="acheter.php" > Acheter </a></button>
            <button  name="action" value="louer"> <a href="louer.php" > Louer  </a> </button>
            
            
        </form>
        <p>
                <a href="Accueil.php"> Retour à la page d'accueil</a>
            </p>
        
        
    </div>
</body>
</html>
