<?php
    require_once('../php/settings.php');
    require_once('../php/class/medewerker.class.php');

    if(isset($_POST['inloggen-medewerker'])){
        $medewerker = new Medewerker();
        $medewerker->login();
    }

    $page = 'inloggen-medewerkers';

    require_once('../templates/base.html.php');
?>
