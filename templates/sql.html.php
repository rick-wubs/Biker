<?php require_once('partials/header.html.php'); ?>

<section class="sql">
    <div class="inner">
        <h2>SQL verschillen</h2>
            <table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides" style="width:100%">
                <thead>
                    <tr>
                        <th style="text-align:left">Tabel</th>
                        <th style="text-align:left">Veld</th>
                        <th style="text-align:left">Tabel</th>
                        <th style="text-align:left">Veld</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Klant</td>
                        <td>wachtwoord</td>
                        <td>Klant</td>
                        <td>KlantNr</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>voornaam</td>
                        <td>&#xa0;</td>
                        <td>KlantVoornaam</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>achternaam</td>
                        <td>&#xa0;</td>
                        <td>KlantAchternaam</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>adres</td>
                        <td>&#xa0;</td>
                        <td>Adres</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>huisnummer</td>
                        <td>&#xa0;</td>
                        <td>Postcode</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>postcode</td>
                        <td>&#xa0;</td>
                        <td>Plaats</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>geboortedatum</td>
                        <td>&#xa0;</td>
                        <td>EmailAdres</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>mobiele_telefoonnummer</td>
                        <td>&#xa0;</td>
                        <td>Geboortedatum</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>vaste_telefoonnummer</td>
                        <td>&#xa0;</td>
                        <td>Geslacht</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>geslacht</td>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>verzekering</td>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                    </tr>
                    <tr>
                        <td>&#xa0;</td>
                        <td>emailadres</td>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td>Accessoire</td>
                        <td>barcode</td>
                        <td>Accessoire</td>
                        <td>Barcode</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>type</td>
                        <td>&#xa0;</td>
                        <td>Soort</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>merk</td>
                        <td>&#xa0;</td>
                        <td>MerkNaam</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>dagprijs</td>
                        <td>&#xa0;</td>
                        <td>Type</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>nieuwprijs</td>
                        <td>&#xa0;</td>
                        <td>Dagprijs</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>uitvoering</td>
                        <td>&#xa0;</td>
                        <td>Nieuwwaarde</td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td>Accessoire_reservering</td>
                        <td>reserveringsnummer</td>
                        <td>AccessoireSoort</td>
                        <td>Soort</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>barcode</td>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td>Fiets</td>
                        <td>framenummer</td>
                        <td>Fiets</td>
                        <td>FrameNr</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>type</td>
                        <td>&#xa0;</td>
                        <td>MerkNaam</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>merk</td>
                        <td>&#xa0;</td>
                        <td>Type</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>dagprijs</td>
                        <td>&#xa0;</td>
                        <td>DamesOfHeren</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>nieuwprijs</td>
                        <td>&#xa0;</td>
                        <td>Elektrisch</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                        <td>Dagprijs</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                        <td>Nieuwwaarde</td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td>Reservering</td>
                        <td>reserveringnummer</td>
                        <td>Huurovereenkomst</td>
                        <td>HuurovereenkomstNr</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>klant</td>
                        <td>&#xa0;</td>
                        <td>Startdatum</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>reis</td>
                        <td>&#xa0;</td>
                        <td>Einddatum</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>startdatum</td>
                        <td>&#xa0;</td>
                        <td>Betaaldatum</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>einddatum</td>
                        <td>&#xa0;</td>
                        <td>StatusOmschrijving</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                        <td>KlantNr</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                        <td>Inlognaam</td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                        <td>HuurovereenkomstStatus</td>
                        <td>StatusOmschrijving</td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td>Medewerker</td>
                        <td>medewerkernummer</td>
                        <td>Medewerker</td>
                        <td>Inlognaam</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>wachtwoord</td>
                        <td>&#xa0;</td>
                        <td>Wachtwoord</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>voornaam</td>
                        <td>&#xa0;</td>
                        <td>Geboortedatum</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>achternaam</td>
                        <td>&#xa0;</td>
                        <td>MedewerkerVoornaam</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>geboortedatum</td>
                        <td>&#xa0;</td>
                        <td>MedewerkerAchternaam</td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td>Medewerker_rol</td>
                        <td>Medewerkernummer</td>
                        <td>MedewerkerRol</td>
                        <td>Rolnaam</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>rol</td>
                        <td>&#xa0;</td>
                        <td>Inlognaam</td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                        <td>Merk</td>
                        <td>MerkNaam</td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td>Rol</td>
                        <td>rol</td>
                        <td>Rol</td>
                        <td>Rolnaam</td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td>Schade</td>
                        <td>schadenummer</td>
                        <td>Schade</td>
                        <td>SchadeNr</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>schaderekening</td>
                        <td>&#xa0;</td>
                        <td>Werkzaamheden</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>status</td>
                        <td>&#xa0;</td>
                        <td>StartDatum</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>startdatum</td>
                        <td>&#xa0;</td>
                        <td>GereedDatum</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>taxatie</td>
                        <td>&#xa0;</td>
                        <td>KostenReparatie</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>medewerkernummer</td>
                        <td>&#xa0;</td>
                        <td>BetaalDatum</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>werkzaamheden</td>
                        <td>&#xa0;</td>
                        <td>Inlognaam</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>datum_gereed</td>
                        <td>&#xa0;</td>
                        <td>FrameNr</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                        <td>HuurovereenkomstNr</td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td>Factuur</td>
                        <td>factuurnummer</td>
                        <td>TelefoonNummer</td>
                        <td>KlantNr</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>reserveringnummer</td>
                        <td>&#xa0;</td>
                        <td>TelefoonNr</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>bedrag</td>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td>Betaling</td>
                        <td>factuurnummer</td>
                        <td>VerhuurdeAccessoire</td>
                        <td>HuurovereenkomstNr</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>type</td>
                        <td>&#xa0;</td>
                        <td>Barcode</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>bedrag</td>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>borg</td>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td>Fiets_reservering</td>
                        <td>reserveringsnummer</td>
                        <td>VerhuurdeFiets</td>
                        <td>HuurovereenkomstNr</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>framenummer</td>
                        <td>&#xa0;</td>
                        <td>FrameNr</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                        <td>Polisnummer</td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td>Verzekering</td>
                        <td>polisnummer</td>
                        <td>Verzekering</td>
                        <td>Polisnummer</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>looptijd</td>
                        <td>&#xa0;</td>
                        <td>Startdatum</td>
                    </tr>

                    <tr>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                        <td>Einddatum</td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td>&#xa0;</td>
                        <td>&#xa0;</td>
                        <td>Werkzaamheden</td>
                        <td>Werk</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php require_once('partials/footer.html.php'); ?>
