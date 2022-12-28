<?php
    require_once('../php/settings.php');
    require_once('../php/class/klant.class.php');
    require_once('../php/class/fiets.class.php');
    require_once('../php/class/accessoire.class.php');

    // DOMPDF
    require_once('../php/dompdf/lib/html5lib/Parser.php');
    require_once('../php/dompdf/lib/php-font-lib/src/FontLib/Autoloader.php');
    require_once('../php/dompdf/lib/php-svg-lib/src/autoload.php');
    require_once('../php/dompdf/src/Autoloader.php');
    Dompdf\Autoloader::register();
    use Dompdf\Dompdf;

    $klantNr = $_POST['klantNr'];
    $fietsen = json_decode($_POST['fiets']);
    $accessoires = json_decode($_POST['accessoire']);

    // Datum berekeningen
    $startdatum = strtotime($_POST['startdatum']);
    $startdatumFormat = date('d-m-Y', $startdatum);
    $einddatum = strtotime($_POST['einddatum']);
    $einddatumFormat = date('d-m-Y', $einddatum);
    $aantalDagenVerschil = abs($einddatum - $startdatum);
    $jaren = floor($aantalDagenVerschil / (365*60*60*24));
    $maanden = floor(($aantalDagenVerschil - $jaren * 365*60*60*24) / (30*60*60*24));
    $dagen = floor(($aantalDagenVerschil - $jaren * 365*60*60*24 - $maanden*30*60*60*24)/ (60*60*24) + 1);

    $fietsenArray = [];
    $accessoiresArray = [];

    // Klant informatie
    $getKlant = new Klant();
    $klant = $getKlant->getKlantById($klantNr);

    // Controleer of klant trouw is
    $trouweKlant = $getKlant->trouweKlant($klantNr);
    if(!empty($trouweKlant)){
        $trouweKlant = true;
    } else {
        $trouweKlant = false;
    }

    // Fietsen
    foreach($fietsen as $fiets){
        $object = new Fiets();
        $result = $object->getFietsById($fiets->frameNr);
        array_push($fietsenArray, array(
            'aantal' => $fiets->aantal,
            'frameNr' => $fiets->frameNr,
            'merkNaam' => $result['MerkNaam'],
            'type' => $result['Type'],
            'damesOfHeren' => $result['DamesOfHeren'],
            'elektrisch' => $result['Elektrisch'],
            'dagprijs' => $result['Dagprijs']
        ));
    }

    // Accessoires
    foreach($accessoires as $accessoire){
        $object = new Accessoire();
        $result = $object->getAccessoireById($accessoire->barcode);
        array_push($accessoiresArray, array(
            'aantal' => $accessoire->aantal,
            'barcode' => $accessoire->barcode,
            'soort' => $result['Soort'],
            'merkNaam' => $result['MerkNaam'],
            'type' => $result['Type'],
            'dagprijs' => $result['Dagprijs']
        ));
    }

    // Bouw HTML
    $subtotaal = 0;
    $html = "";
    $html .= "<div style='font-family: Helvetica; line-height: 1.5em;'>";
        $html .= "<div style='width:50%; float:left;'>";
            $html .= "<img src='../web/assets/img/logo.png' style='width:200px; margin-bottom: 40px;'><br>";
            $html .= "<div style='margin-bottom: 40px;'>";
                $html .= $klant['KlantVoornaam'] . ' ' . $klant['KlantAchternaam'] . '<br>';
                $html .= $klant['Adres'] . '<br>';
                $html .= $klant['Postcode'] . ' ' . $klant['Plaats'];
            $html .= "</div>";
            $html .= "<div style='margin-bottom: 40px;'>";
                $html .= "Offertedatum: " . date('d-m-Y') . "<br>";
                $html .= "Vervaldatum: " . date('d-m-Y', strtotime(date('d-m-Y'). ' + 14 days')) . "<br>";
                $html .= "Offertenummer: " . rand(100000, 999999);
            $html .= "</div>";
        $html .= "</div>";
        $html .= "<div style='width:50%; float:left;'>";
            $html .= "<h1 style='margin:91px 0; text-align: center;'>OFFERTE</h1>";
            $html .= "Startdatum: " . $startdatumFormat . "<br>";
            $html .= "Einddatum: " . $einddatumFormat . "<br>";
            $html .= "Aantal dagen: " . $dagen;
        $html .= "</div>";
        $html .= "<div style='clear:both;'></div>";
        $html .= "<div style='margin-bottom: 40px;'>";
            $html .= "<table style='width:100%;border-collapse:collapse;'>";
            $html .= "<thead style='background: #ed7d31; color: #fff; text-align: left;'><tr>";
            $html .= "<th style='padding: 5px 10px;'>Aantal</th><th style='padding: 5px 10px;'>Omschrijving</th><th style='padding: 5px 10px;'>Dagprijs</th><th style='padding: 5px 10px;'>BTW</th><th style='padding: 5px 10px;white-space: nowrap;'>Prijs excl. BTW</th></tr></thead><tbody>";
            foreach($fietsenArray as $fietsData){
                $html .= "<tr><td style='padding: 5px 10px;'>".$fietsData['aantal']."</td>";
                $html .= "<td style='padding: 5px 10px;'>Fiets ".$fietsData['merkNaam']." ".$fietsData['type']."</td>";
                $html .= "<td style='padding: 5px 10px;'>&euro;".$fietsData['dagprijs'].",-</td>";
                $html .= "<td style='padding: 5px 10px;'>21%</td>";
                $html .= "<td style='padding: 5px 10px;'>&euro;".$fietsData['aantal'] * $fietsData['dagprijs'].",-</td>";
                $html .= "</tr>";
                $subtotaal += ($fietsData['aantal'] * $fietsData['dagprijs']);
            }
            foreach($accessoiresArray as $accessoireData){
                $html .= "<tr><td style='padding: 5px 10px;'>".$accessoireData['aantal']."</td>";
                $html .= "<td style='padding: 5px 10px;'>".$accessoireData['soort']." ".$accessoireData['merkNaam']." ".$accessoireData['type']."</td>";
                $html .= "<td style='padding: 5px 10px;'>&euro;".$accessoireData['dagprijs'].",-</td>";
                $html .= "<td style='padding: 5px 10px;'>21%</td>";
                $html .= "<td style='padding: 5px 10px;'>&euro;".$accessoireData['aantal'] * $accessoireData['dagprijs'].",-</td>";
                $html .= "</tr>";
                $subtotaal += ($accessoireData['aantal'] * $accessoireData['dagprijs']);
            }
            $html .= "</tbody></table>";
        $html .= "</div>";
        $html .= "<div style='margin-bottom: 40px; text-align: right;'>";
            $html .= "Aantal dagen: " . $dagen . "<br>";
            $subtotaal = $subtotaal * $dagen;
            $html .= "Totaal excl. BTW: &euro;" . number_format($subtotaal, 2, ',', '.') . "<br>";
            $html .= "Totaal BTW: &euro;" . number_format($subtotaal * 0.21, 2, ',', '.') . "<br>";
            $html .= "Totaal incl. BTW: &euro;" . number_format($subtotaal * 1.21, 2, ',', '.') . "<br>";

            // Bereken borg
            $borg = 0;
            if(!$trouweKlant){
                $borg = ($subtotaal * 1.21) * 0.20;
                $html .= "20% borg: &euro;" . number_format($borg, 2, ',', '.') . "<br>";
            }
            
            $totaal = ($subtotaal * 1.21) + $borg;
            $html .= "<strong>Te betalen: &euro;" . number_format($totaal, 2, ',', '.') . "</strong>";
        $html .= "</div>";
        $html .= "<p>Voor akkoord:</p><br><br>";
        $html .= "--------------------------------------------------------------&nbsp;&nbsp;&nbsp;Handtekening en naam";
    $html .= "</div>";

    // Genereer PDF
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream('offerte.pdf', array("Attachment" => false));
?>
