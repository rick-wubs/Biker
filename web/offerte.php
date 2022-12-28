<?php
    require_once('../php/settings.php');
    require_once('../php/class/medewerker.class.php');
    require_once('../php/class/fiets.class.php');
    require_once('../php/class/accessoire.class.php');

    $page = 'offerte';

    if(!isset($_SESSION['user'])){
        header('location: index.php');
        exit;
    }

    // Fietsen
    $fiets = new Fiets();
    $fietsen = $fiets->read();

    // Accessoires
    $accessoire = new Accessoire();
    $accessoires = $accessoire->read();

    require_once('../templates/base.html.php');
?>
