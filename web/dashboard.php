<?php
    require_once('../php/settings.php');
    require_once('../php/class/medewerker.class.php');
    require_once('../php/class/klant.class.php');

    $page = 'dashboard';

    if(!isset($_SESSION['user'])){
        header('location: index.php');
        exit;
    }

    // Klanten
    $klant = new Klant();
    $klanten = $klant->read();

    // Huurovereenkomsten
    $huurovereenkomsten = $klant->huurovereenkomsten();

    require_once('../templates/base.html.php');
?>
