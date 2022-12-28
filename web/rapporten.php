<?php
    require_once('../php/settings.php');

    $page = 'rapporten';

    if(!isset($_SESSION['user'])){
        header('location: index.php');
        exit;
    }

    require_once('../templates/base.html.php');
?>
