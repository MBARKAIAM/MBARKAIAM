<?php

$prixHT = '';
$tauxTVA = '';
$montantTVA = '';
$prixTTC = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $prixHT = isset($_POST['prixHT']) ? (float)$_POST['prixHT'] : 0;
    $tauxTVA = isset($_POST['tauxTVA']) ? (float)$_POST['tauxTVA'] : 0;
    if ($prixHT > 0 && $tauxTVA >= 0) {
        $montantTVA = $prixHT * ($tauxTVA / 100);
        $prixTTC = $prixHT + $montantTVA;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 14 - Calcul de TVA et prix TTC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f4f9;
        }
        .form-container {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 500px;
        }
        h1 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .form-container label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #555;
        }
        .form-container input[type="number"], .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .results {
            margin-top: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }
        .results label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #333;
        }
        .results input[type="text"] {
            background-color: #fff;
            border: none;
            color: #007bff;
            font-weight: bold;
            text-align: center;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
            font-size: 16px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    
    <div class="form-container">
        <h1>Calcul de la TVA et prix TTC</h1>
        <form method="POST">
            <label for="prixHT">Prix Hors Taxe (HT) :</label>
            <input type="number" step="0.01" id="prixHT" name="prixHT" value="<?php echo $prixHT; ?>" required>

            <label for="tauxTVA">Taux de TVA (%) :</label>
            <input type="number" step="0.01" id="tauxTVA" name="tauxTVA" value="<?php echo $tauxTVA; ?>" required>

            <input type="submit" value="Calculer">
        </form>

        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && $prixHT > 0 && $tauxTVA >= 0): ?>
            <div class="results">
                <h3>Résultats</h3>
                <label for="montantTVA">Montant de la TVA :</label>
                <input type="text" id="montantTVA" name="montantTVA" value="<?php echo number_format($montantTVA, 2, ',', ' '); ?>" readonly>

                <label for="prixTTC">Prix Toutes Taxes Comprises (TTC) :</label>
                <input type="text" id="prixTTC" name="prixTTC" value="<?php echo number_format($prixTTC, 2, ',', ' '); ?>" readonly>
            </div>
            <a href="Accueil.php">Retour à la page d'accueil</a>
        <?php endif; ?>
    </div>

</body>
</html>
