<?php
    require_once('../php/settings.php');
    require_once('../php/class/klant.class.php');

    $klant = new Klant();
    $huurovereenkomsten = $klant->huurovereenkomsten();

    echo json_encode($huurovereenkomsten);
?>
