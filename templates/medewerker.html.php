<?php require_once('partials/header.html.php'); ?>

<section class="medewerkers">
    <div class="inner">
        <h2><?= $medewerker_naam; ?></h2>
        <p>Huidige <?= $rolString; ?>: <?= implode(', ', $rollen); ?></p>
        <form action="" method="post" class="medewerkerRollen">
            <?php foreach($alleRollen as $beschikbareRol): ?>
                <?php $checked = in_array($beschikbareRol['Rolnaam'], $rollen) ? 'checked' : ''; ?>
                <label for="<?= $beschikbareRol['Rolnaam']; ?>">
                    <input type="checkbox" name="rol[]" value="<?= $beschikbareRol['Rolnaam']; ?>" id="<?= $beschikbareRol['Rolnaam']; ?>" <?= $checked; ?>>
                    <?= $beschikbareRol['Rolnaam']; ?>
                </label>
            <?php endforeach; ?>
            <br>
            <button type="sumit" name="saveRoles" class="btn btn-primary">Opslaan</button>
            <a href="medewerkers.php" class="btn btn-primary">Terug</a>
        </form>
    </div>
</section>

<?php require_once('partials/footer.html.php'); ?>
