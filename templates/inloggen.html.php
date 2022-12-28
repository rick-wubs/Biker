<?php require_once('partials/header.html.php'); ?>

<section id="loginRegister">
    <div class="inner">
        <div class="login">
            <form>
                <legend>Inloggen</legend>
                <fieldset>
                    <input type="email" placeholder="E-mailadres">
                    <input type="password" placeholder="Wachtwoord">

                    <button type="button" class="btn btn-primary">Inloggen</button>
                    <a href="wachtwoord-vergeten.php" style="font-size: 14px;">Wachtwoord vergeten?</a>
                    <hr style="margin: 15px 0;">
                    <p>Of log in als <a href="inloggen-medewerkers.php">medewerker</a></p>
                </fieldset>
            </form>
        </div>

        <div class="register">
            <form>
                <legend>Registreren</legend>
                <fieldset>
                    <input type="text" class="aanhef" placeholder="Aanhef">
                    <input type="text" class="voornaam" placeholder="Voornaam">
                    <input type="text" class="achternaam" placeholder="Achternaam">
                    <input type="text" class="postcode" placeholder="Postcode">
                    <input type="text" class="plaatsnaam" placeholder="Plaatsnaam">
                    <input type="text" class="straatnaam" placeholder="Straatnaam">
                    <input type="text" class="huisnummer" placeholder="Huisnummer">
                    <input type="text" class="land" placeholder="Land">
                    <input type="text" class="telefoonnummer" placeholder="Telefoonnummer">
                    <input type="text" class="emailadres" placeholder="E-mailadres">
                    <span class="algemene-voorwaarden-text">Door het registreren als nieuwe klant van Biker ga ik akkoord met de <a href="algemene-voorwaarden.php">algemene voorwaarden</a> van Biker.</span>
                    <button type="button" class="btn btn-primary">Registreren</button>
                </fieldset>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</section>

<?php require_once('partials/footer.html.php'); ?>
