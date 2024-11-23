<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    if ($action === 'vendre') {
        header('Location: vendre.php');
    } elseif ($action === 'acheter') {
        header('Location: acheter.php');
    } elseif ($action === 'louer') {
        header('Location: louer.php');
    } else {
        echo "Action non reconnue.";
    }
    exit();
}
?>
