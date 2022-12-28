<?php require_once('partials/header.html.php'); ?>

<section class="dashboard">
    <div class="inner">
        <h2>Klantenoverzicht</h2>
        <div id="klantenlijst">
            <table>
                <thead>
                    <tr>
                        <th>KlantNr</th>
                        <th>Naam</th>
                        <th>E-mail</th>
                        <th>Geboortedatum</th>
                        <th>Geslacht</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($klanten as $klant): ?>
                        <tr>
                            <td><?= $klant['KlantNr']; ?></td>
                            <td><?= $klant['KlantVoornaam'] . ' ' . $klant['KlantAchternaam']; ?></td>
                            <td><?= $klant['EmailAdres'] ;?></td>
                            <td><?= $klant['Geboortedatum'] ;?></td>
                            <td><?= $klant['Geslacht'] ;?></td>
                            <td><button type="button" class="bekijk-details" data-klant="<?= $klant["KlantNr"]; ?>">Bekijk details</button>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="overlay">
            <div class="klantendetails">
                <div class="kd-header">
                    <h3>Klantendetails</h3>
                    <span class="close">X</span>
                </div>
                <div class="kd-body">
                    <h4>Huurovereenkomsten:</h4>
                    <table>
                        <thead>
                            <tr>
                                <th>Huurov. Nr.</th>
                                <th>Begindatum</th>
                                <th>Einddatum</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <div class="kd-footer">
                    <a href="offerte.php" class="btn btn-primary btn-offerte">Maak nieuwe offerte</a>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('partials/footer.html.php'); ?>
