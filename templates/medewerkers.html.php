<?php require_once('partials/header.html.php'); ?>

<section class="medewerkers">
    <div class="inner">
        <h2>Medewerkers</h2>
        <div id="klantenlijst">
            <table>
                <thead>
                    <tr>
                        <th>Inlognaam</th>
                        <th>Naam</th>
                        <th>Geboortedatum</th>
                        <th>Rollen</th>
                        <th>Laatste login</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($alleMedewerkers as $key => $medewerkerBiker): ?>
                        <?php
                            $rollen = [];
                            foreach($newMedewerker->getOne($medewerkerBiker['Inlognaam']) as $smw){
                                array_push($rollen, $smw['Rolnaam']);
                            }
                            $medewerkerRollen = implode($rollen, ', ');
                            $datetime = date_create($medewerkerBiker['LaatsteLogin']);
                            $lastLogin = date_format($datetime, 'd-m-Y H:i:s'); ?>
                        <tr>
                            <td><?= $medewerkerBiker['Inlognaam']; ?></td>
                            <td><?= $medewerkerBiker['MedewerkerVoornaam'] . ' ' . $medewerkerBiker['MedewerkerAchternaam']; ?></td>
                            <td><?= $medewerkerBiker['Geboortedatum'] ;?></td>
                            <td><?= $medewerkerRollen; ?></td>
                            <td><?= ($medewerkerBiker['LaatsteLogin'] == null) ? 'Nog niet ingelogd' : $lastLogin; ?></td>
                            <td><a href="medewerker.php?inlognaam=<?= $medewerkerBiker['Inlognaam']; ?>" class="beheer-rollen">Beheer rollen</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php if(isset($_GET['success'])): ?>
            <div class="message roleSaved">
                <span><img src="assets/img/success.png"> Medewerker opgeslagen</span>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php require_once('partials/footer.html.php'); ?>
