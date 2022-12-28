<?php
    require_once('../php/settings.php');
    require_once('../php/class/medewerker.class.php');
    require_once('../php/class/rol.class.php');

    $page = 'medewerker';

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

    // Geselecteerde medewerker
    $selectedMedewerker = $newMedewerker->getOne($_GET['inlognaam']);
    $medewerker_naam = $selectedMedewerker[0]['MedewerkerVoornaam'] . ' ' . $selectedMedewerker[0]['MedewerkerAchternaam'];

    // Haal huidige rollen op van deze medewerker
    $rollen = [];
    foreach($selectedMedewerker as $smw){
        array_push($rollen, $smw['Rolnaam']);
    }
    $rolString = "rol";
    if(count($rollen) > 1){
        $rolString = "rollen";
    }

    // Alle rollen
    $rolObj = new Rol();
    $alleRollen = $rolObj->read();

    // Na het opslaan
    if(isset($_POST['saveRoles'])){
        // Voeg rol toe aan MedewerkerRol
        foreach($_POST['rol'] as $geselecteerdeRol){
            if(!in_array($geselecteerdeRol, $rollen)){
                $rolObj->create($geselecteerdeRol, $_GET['inlognaam']);
            }
        }
        // Verwijder rol uit MedewerkerRol
        foreach($rollen as $huidigeRol){
            if(!in_array($huidigeRol, $_POST['rol'])){
                $rolObj->delete($huidigeRol, $_GET['inlognaam']);
            }
        }
        // Redirect met melding
        header('location: medewerkers.php?success=true');
        exit;
    }

    require_once('../templates/base.html.php');
?>
