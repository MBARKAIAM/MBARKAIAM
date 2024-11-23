<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acheter un Bien</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .container {
            max-width: 1000px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            margin-bottom: 10px;
            color: #333;
        }
        p {
            color: #555;
            margin-bottom: 30px;
        }
        .image-row {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
        }
        .image-card {
            max-width: 300px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px;
        }
        .image-card img {
            width: 100%;
            height: auto;
            display: block;
        }
        .image-card button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-top: 1px solid #ddd;
        }
        .image-card button:hover {
            background-color: #0056b3;
        }
        .back-link {
            margin-top: 20px;
            display: inline-block;
            font-size: 16px;
            color: #007bff;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Acheter un Bien Immobilier</h1>
        <p>Découvrez nos offres exclusives pour trouver la maison de vos rêves !</p>
        
        <div class="image-row">
            <div class="image-card">
                <img src="img/2.jpeg" alt="Maison à vendre">
                <button>Acheter</button>
            </div>
            <div class="image-card">
                <img src="img/3.jpeg" alt="Maison à vendre">
                <button>Acheter</button>
            </div>
        </div>
        
        <a href="exo15.php" class="back-link">Retour à la page d'accueil du site d'agence immobilière</a>
    </div>
</body>
</html>
