<?php
session_start();

if (isset($_GET['removeAll']) && $_GET['removeAll'] == 'true') {
    unset($_SESSION['favorites']);
}
elseif (isset($_GET['removeID'])) {
    $removeID = $_GET['removeID'];

    if (isset($_SESSION['favorites'])) {
        $_SESSION['favorites'] = array_filter($_SESSION['favorites'], function($fav) use ($removeID) {
            return $fav['PaintingID'] != $removeID;
        });

        $_SESSION['favorites'] = array_values($_SESSION['favorites']);
    }
}

header("Location: view-favorites.php");
exit;
