<?php
    require_once('../php/settings.php');
    require_once('../php/class/rapport.class.php');

    if(!isset($_SESSION['user'])){
        header('location: index.php');
        exit;
    }

    // DOMPDF
    require_once('../php/dompdf/lib/html5lib/Parser.php');
    require_once('../php/dompdf/lib/php-font-lib/src/FontLib/Autoloader.php');
    require_once('../php/dompdf/lib/php-svg-lib/src/autoload.php');
    require_once('../php/dompdf/src/Autoloader.php');
    Dompdf\Autoloader::register();
    use Dompdf\Dompdf;

    // Rapport informatie
    $rapport = new Rapport();
    $data = $rapport->getDataByView($_POST['view']);

    // Bouw HTML
    $html = "";
    $html .= "<img src='../web/assets/img/logo.png' style='width:200px; margin-bottom: 40px;'><br>";
    $html .= "<div style='font-family: helvetica'>";
        $html .= "<h1 style='margin-bottom:40px;'>".$_POST['rapport']."</h1>";
        $html .= "<p style='margin-bottom:40px;'>".$_POST['omschrijving']."</p>";
        $html .= "<table style='width:100%;border-collapse:collapse;'>";
        $html .= "<thead style='background: #ed7d31; color: #fff; text-align: left;'><tr>";
        foreach($data[0] as $dataKey => $dataValue){
            $html .= "<th style='padding: 5px 10px;'>".$dataKey."</th>";
        }
        $html .= "</tr></thead><tbody>";
        foreach($data as $viewData){
            $html .= "<tr>";
            foreach($data[0] as $dataKey => $dataValue){
                $html .= "<td style='padding: 5px 10px;'>".$viewData[$dataKey]."</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</tbody></table>";
    $html .= "</div>";

    // Genereer PDF
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream('offerte.pdf', array("Attachment" => false));
?>
