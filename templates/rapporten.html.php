<?php require_once('partials/header.html.php'); ?>

<section class="rapporten">
    <div class="inner">
        <h2>Rapporten</h2>
        <p>Klik op een rapport om deze te bekijken.</p>
        <div class="grid">
            <?php
                $rollen = [];
                foreach($medewerker as $mw){
                    array_push($rollen, $mw['Rolnaam']);
                }
            ?>

            <?php if(in_array('Verkoper', $rollen) || in_array('Directie', $rollen) || in_array('Administrator', $rollen)): ?>
                <form action="rapport-pdf.php" method="post" target="_blank">
                    <input type="hidden" name="rapport" value="Rapport A">
                    <input type="hidden" name="view" value="MomenteelVerhuurdeFietsen">
                    <input type="hidden" name="omschrijving" value="Overzicht van fietsen die momenteel verhuurd zijn.">
                    <button type="submit">Rapport A</button>
                </form>
            <?php endif; ?>
            <?php if(in_array('Verkoper', $rollen) || in_array('Monteur', $rollen) || in_array('Directie', $rollen) || in_array('Administrator', $rollen)): ?>
                <form action="rapport-pdf.php" method="post" target="_blank">
                    <input type="hidden" name="rapport" value="Rapport B">
                    <input type="hidden" name="view" value="MomenteelVerhuurdeAccessoires">
                    <input type="hidden" name="omschrijving" value="Overzicht van accessoires die momenteel verhuurd zijn.">
                    <button type="submit">Rapport B</button>
                </form>
            <?php endif; ?>
            <?php if(in_array('Directie', $rollen) || in_array('Administrator', $rollen)): ?>
                <form action="rapport-pdf.php" method="post" target="_blank">
                    <input type="hidden" name="rapport" value="Rapport C">
                    <input type="hidden" name="view" value="NietVerhuurdeFietsen2018">
                    <input type="hidden" name="omschrijving" value="Lijst met fietsen die nog niet verhuurd zijn in 2018">
                    <button type="submit">Rapport C</button>
                </form>
            <?php endif; ?>
            <?php if(in_array('Verkoper', $rollen) || in_array('Directie', $rollen) || in_array('Administrator', $rollen)): ?>
                <form action="rapport-pdf.php" method="post" target="_blank">
                    <input type="hidden" name="rapport" value="Rapport D">
                    <input type="hidden" name="view" value="NietVerhuurdeAccessoiresLaatste2Jaar">
                    <input type="hidden" name="omschrijving" value="Lijst met accessoires die de laatste 2 jaar niet verhuurd zijn. Deze gaan ze op marktplaats
verkopen.">
                    <button type="submit">Rapport D</button>
                </form>
            <?php endif; ?>
            <?php if(in_array('Verkoper', $rollen) || in_array('Directie', $rollen) || in_array('Administrator', $rollen)): ?>
                <form action="rapport-pdf.php" method="post" target="_blank">
                    <input type="hidden" name="rapport" value="Rapport E">
                    <input type="hidden" name="view" value="Omzet2010Tot2018 order by jaar, maand">
                    <input type="hidden" name="omschrijving" value="Omzetten van iedere maand van de jaren 2010 tot en met 2018">
                    <button type="submit">Rapport E</button>
                </form>
            <?php endif; ?>
            <?php if(in_array('Verkoper', $rollen) || in_array('Monteur', $rollen) || in_array('Directie', $rollen) || in_array('Administrator', $rollen)): ?>
                <form action="rapport-pdf.php" method="post" target="_blank">
                    <input type="hidden" name="rapport" value="Rapport F">
                    <input type="hidden" name="view" value="Top10PopulairsteFietsen">
                    <input type="hidden" name="omschrijving" value="Overzicht van de top 10 van populairste fietsen (vaakst verhuurd).">
                    <button type="submit">Rapport F</button>
                </form>
            <?php endif; ?>
            <?php if(in_array('Verkoper', $rollen) || in_array('Directie', $rollen) || in_array('Administrator', $rollen)): ?>
                <form action="rapport-pdf.php" method="post" target="_blank">
                    <input type="hidden" name="rapport" value="Rapport G">
                    <input type="hidden" name="view" value="Top100KlantenLastYear order by totaal desc">
                    <input type="hidden" name="omschrijving" value="Overzicht van de top 100 beste klanten van het afgelopen jaar, die gaan ze een kerstkaart
sturen. Beste klanten zijn die het meeste besteed hebben.">
                    <button type="submit">Rapport G</button>
                </form>
            <?php endif; ?>
            <?php if(in_array('Directie', $rollen) || in_array('Administrator', $rollen)): ?>
                <form action="rapport-pdf.php" method="post" target="_blank">
                    <input type="hidden" name="rapport" value="Rapport H">
                    <input type="hidden" name="view" value="Top10SchadeKlanten order by PercentageSchade desc">
                    <input type="hidden" name="omschrijving" value="Overzicht van de top 10 klanten die het vaakst na een verhuur de fietsen terugbrengen met
schade. Daarbij willen ze weten hoe vaak ze in totaal gehuurd hebben en hoeveel keer er
schade is geweest. Dan weet je ook het percentage schadegevallen per klant, wat ook in het
rapport kan worden opgenomen.">
                    <button type="submit">Rapport H</button>
                </form>
            <?php endif; ?>
            <?php if(in_array('Monteur', $rollen) || in_array('Administrator', $rollen)): ?>
                <form action="rapport-pdf.php" method="post" target="_blank">
                    <input type="hidden" name="rapport" value="Rapport I">
                    <input type="hidden" name="view" value="MeesteAantalSchades ORDER BY Aantal DESC, Kosten DESC">
                    <input type="hidden" name="omschrijving" value="Lijst met fietsen met het meeste aantal schades (op basis van aantal en op basis van
schadebedrag).">
                    <button type="submit">Rapport I</button>
                </form>
            <?php endif; ?>
            <?php if(in_array('Directie', $rollen) || in_array('Administrator', $rollen)): ?>
                <form action="rapport-pdf.php" method="post" target="_blank">
                    <input type="hidden" name="rapport" value="Rapport J">
                    <input type="hidden" name="view" value="GeannuleerdeFietsen2015Tot2018">
                    <input type="hidden" name="omschrijving" value="Percentage geannuleerde fietsverhuur-aanvragen in 2015 t/m 2018.">
                    <button type="submit">Rapport J</button>
                </form>
            <?php endif; ?>
            <?php if(in_array('Verkoper', $rollen) || in_array('Directie', $rollen) || in_array('Administrator', $rollen)): ?>
                <form action="rapport-pdf.php" method="post" target="_blank">
                    <input type="hidden" name="rapport" value="Rapport K">
                    <input type="hidden" name="view" value="TrouweKlantenIn2017En2018">
                    <input type="hidden" name="omschrijving" value="Trouwe klanten van 2017 en 2018.">
                    <button type="submit">Rapport K</button>
                </form>
            <?php endif; ?>
            <?php if(in_array('Directie', $rollen) || in_array('Administrator', $rollen)): ?>
                <form action="rapport-pdf.php" method="post" target="_blank">
                    <input type="hidden" name="rapport" value="Rapport L">
                    <input type="hidden" name="view" value="TotaalBetaaldeBorg2015Tot2018">
                    <input type="hidden" name="omschrijving" value="Totaal betaalde borg in de jaren 2015 t/m 2018.">
                    <button type="submit">Rapport L</button>
                </form>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php require_once('partials/footer.html.php'); ?>
