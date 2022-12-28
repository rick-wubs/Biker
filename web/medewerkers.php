<?php
    require_once('../php/settings.php');
    require_once('../php/class/medewerker.class.php');

    $page = 'medewerkers';

    if(!isset($_SESSION['user'])){
        header('location: index.php');
        exit;
    }

    // Medewerker
    $newMedewerker = new Medewerker();
    $medewerker = $newMedewerker->read();

    if($medewerker[0]['Rolnaam'] != 'Administrator'){
        header('location: dashboard.php');
        exit;
    }

    // Medewerker
    $alleMedewerkers = $newMedewerker->getAll();

    require_once('../templates/base.html.php');
?>
