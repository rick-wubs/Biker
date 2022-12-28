<?php
    require_once('../php/settings.php');
    require_once('../php/class/fiets.class.php');

    $page = 'fietsen';

    $fiets = new Fiets();
    $fietsen = $fiets->read();

    require_once('../templates/base.html.php');
?>
