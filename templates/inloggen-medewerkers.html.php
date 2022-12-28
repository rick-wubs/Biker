<?php require_once('partials/header.html.php'); ?>

<section id="loginRegister">
    <div class="inner">
        <div class="login">
            <form method="post" action="inloggen-medewerkers.php">
                <legend>Inloggen</legend>
                <fieldset>
                    <input type="text" name="inlognaam" placeholder="Inlognaam">
                    <input type="password" name="wachtwoord" placeholder="Wachtwoord">

                    <button type="submit" name="inloggen-medewerker" class="btn btn-primary">Inloggen</button>
                    <a href="wachtwoord-vergeten.php" style="font-size: 14px;">Wachtwoord vergeten?</a>
                </fieldset>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</section>

<?php require_once('partials/footer.html.php'); ?>
