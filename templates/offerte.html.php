<?php require_once('partials/header.html.php'); ?>

<section class="offerte">
    <div class="inner">
        <h2 class="offerteTitel">Offerte</h2>
        <!-- <span class="currentQuotationPrice">Subtotaal: &euro;<span class="price">0</span>,-</span> -->
        <div class="offerte-status">
            <ul class="progressbar">
                <li class="active"><span class="state">Kies fiets</span></li>
                <li><span class="state">Kies accessoire</span></li>
                <li><span class="state">Selecteer datum</span></li>
                <li><span class="state">Overzicht</span></li>
            </ul>
        </div>
        <div class="clear"></div>
        <div class="prevNext">
            <button type="button" class="prev btn btn-primary">Vorige</button>
            <button type="button" class="next btn btn-primary">Volgende</button>
        </div>
        <div id="fietsen" data-step="1" class="step active">
            <div class="grid">
                <?php foreach($fietsen as $fiets): ?>
                    <article>
                        <span id="frameNr" data-frameNr="<?= $fiets["FrameNr"]; ?>"></span>
                        <span id="dagprijs" data-dagprijs="<?= $fiets["Dagprijs"]; ?>"></span>
                        <img src="assets/img/fiets.png" alt="Fiets">
                        <h3><?= $fiets["MerkNaam"] . ' ' . $fiets["Type"]; ?></h3>
                        <p class="price">Dagprijs: <span>&euro;<?= $fiets["Dagprijs"]; ?>,-</span></p>
                        <p class="price">Nieuwwaarde: <span>&euro;<?= $fiets["Nieuwwaarde"]; ?>,-</span></p>
                        <br>
                        <input type="number" min="0" value="1"><button type="button" class="addToCart btn btn-primary">Voeg toe</button>
                    </article>
                <?php endforeach; ?>
            </div>
            <div class="clear"></div>
        </div>

        <div id="fietsen" data-step="2" class="step">
            <div class="grid">
                <?php foreach($accessoires as $accessoire): ?>
                    <article>
                        <span id="barcode" data-barcode="<?= $accessoire["Barcode"]; ?>"></span>
                        <span id="dagprijs" data-dagprijs="<?= $accessoire["Dagprijs"]; ?>"></span>
                        <?php
                            switch($accessoire["Soort"]){
                                case 'Kinderzitje': $url = "kinderzitje.jpg"; break;
                                case 'Helm': $url = 'helm.jpg'; break;
                                default: $url = 'fietstas.png'; break;
                            }
                        ?>
                        <img src="assets/img/<?= $url; ?>" alt="Fiets">
                        <p><?= $accessoire["Soort"]; ?></p>
                        <h3><?= $accessoire["MerkNaam"] . ' ' . $accessoire["Type"]; ?></h3>
                        <p class="price">Dagprijs: <span>&euro;<?= $accessoire["Dagprijs"]; ?>,-</span></p>
                        <p class="price">Nieuwwaarde: <span>&euro;<?= $accessoire["Nieuwwaarde"]; ?>,-</span></p>
                        <br>
                        <input type="number" min="0" value="1"><button type="button" class="addToCart btn btn-primary">Voeg toe</button>
                    </article>
                <?php endforeach; ?>
            </div>
            <div class="clear"></div>
        </div>

        <div id="kiesDatum" class="step" data-step="3">
            <div class="startdatum">
                <p>Kies een startdatum:</p>
                <input type="text" class="datepicker">
            </div>
            <div class="einddatum">
                <p>Kies een einddatum:</p>
                <input type="text" class="datepicker">
            </div>
        </div>

        <div class="step" data-step="4">
            <h3>Overzicht bestelling:</h3>
            <form action="pdf.php" method="post" target="_blank">
                <input type="hidden" name="klantNr" value="<?= $_GET['klantNr']; ?>">
                <input type="hidden" name="fiets" value="">
                <input type="hidden" name="accessoire" value="">
                <input type="hidden" name="startdatum" value="">
                <input type="hidden" name="einddatum" value="">
                <button type="submit" class="btn btn-primary downloadPDF">Bekijk PDF</button>
            </form>
        </div>

        <div class="message noBikeSelected">
            <span><img src="assets/img/warning.png"> Selecteer eerst een fiets a.u.b.</span>
        </div>
    </div>
</section>

<?php require_once('partials/footer.html.php'); ?>
