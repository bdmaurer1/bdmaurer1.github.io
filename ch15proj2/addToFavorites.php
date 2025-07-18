<?php
session_start();

if (isset($_GET['PaintingID'], $_GET['ImageFileName'], $_GET['Title'])) {
    $painting = [
        'PaintingID' => $_GET['PaintingID'],
        'ImageFileName' => $_GET['ImageFileName'],
        'Title' => $_GET['Title']
    ];

    if (!isset($_SESSION['favorites'])) {
        $_SESSION['favorites'] = [];
    }

    $alreadyExists = false;
    foreach ($_SESSION['favorites'] as $fav) {
        if ($fav['PaintingID'] == $painting['PaintingID']) {
            $alreadyExists = true;
            break;
        }
    }

    if (!$alreadyExists) {
        $_SESSION['favorites'][] = $painting;
    }
}

header("Location: view-favorites.php");
exit;
?>
