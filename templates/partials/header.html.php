<header>
    <div class="inner">
        <a href="index.php">
            <h1 class="title">Biker.</h1>
        </a>
        <nav>
            <?php if(!isset($_SESSION['user'])): ?>
                <a href="index.php" class="<?php if($page == "index"){ echo "active"; }; ?>">Home</a>
                <a href="over-biker.php" class="<?php if($page == "over-biker"){ echo "active"; }; ?>">Over BIKER</a>
                <a href="fietsen.php" class="<?php if($page == "fietsen"){ echo "active"; }; ?>">Fietsen</a>
                <a href="accessoires.php" class="<?php if($page == "accessoires"){ echo "active"; }; ?>">Accessoires</a>
                <a href="fietsverhuur.php" class="<?php if($page == "fietsverhuur"){ echo "active"; }; ?>">Fietsverhuur</a>
                <a href="fietsvakantie.php" class="<?php if($page == "fietsvakantie"){ echo "active"; }; ?>">Fietsvakantie</a>
                <a href="inloggen.php" class="<?php if($page == "inloggen"){ echo "active"; }; ?>">Login / Registratie</a>
            <?php else: ?>
                <?php
                    // Medewerker
                    require_once('../php/class/medewerker.class.php');
                    $newMedewerker = new Medewerker();
                    $medewerker = $newMedewerker->read();
                ?>
                <a href="#">Medewerker: <?= $medewerker[0]['MedewerkerVoornaam'] . ' ' . $medewerker[0]['MedewerkerAchternaam']; ?></a>
                <a href="dashboard.php" class="<?php if($page == "dashboard"){ echo "active"; }; ?>">Dashboard</a>
                <a href="rapporten.php" class="<?php if($page == "rapporten"){ echo "active"; }; ?>">Rapporten</a>
                <?php if($medewerker[0]['Rolnaam'] == 'Administrator') : ?>
                    <a href="medewerkers.php" class="<?php if($page == "medewerkers"){ echo "active"; }; ?>">Medewerkers</a>
                <?php endif; ?>
                <a href="uitloggen.php">Uitloggen</a>
            <?php endif; ?>
        </nav>
        <div class="clear"></div>
    </div>
</header>
