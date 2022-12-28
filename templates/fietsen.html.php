<?php require_once('partials/header.html.php'); ?>

<section id="fietsen">
    <aside class="categories">
        <h2>Ons assortiment:</h2>
        <div class="accordion">
            <h3>Elektrische fietsen</h3>
            <div>
                <ul>
                    <li><input type="checkbox"> Elektro</li>
                    <li><input type="checkbox"> Batavus</li>
                    <li><input type="checkbox"> Gazelle</li>
                    <li><input type="checkbox"> Banshee</li>
                    <li><input type="checkbox"> Carrera</li>
                    <li><input type="checkbox"> Drymer</li>
                    <li><input type="checkbox"> Dynamo</li>
                    <li><input type="checkbox"> Alpina Bikes</li>
                    <li><input type="checkbox"> Velomobiel</li>
                    <li><input type="checkbox"> Bianchi</li>
                    <li><input type="checkbox"> Avaghon</li>
                    <li><input type="checkbox"> Overig</li>
                </ul>
            </div>
            <h3>Herenfietsen</h3>
            <div>
                <ul>
                    <li><input type="checkbox"> Elektro</li>
                    <li><input type="checkbox"> Batavus</li>
                    <li><input type="checkbox"> Gazelle</li>
                    <li><input type="checkbox"> Banshee</li>
                    <li><input type="checkbox"> Carrera</li>
                    <li><input type="checkbox"> Drymer</li>
                    <li><input type="checkbox"> Dynamo</li>
                    <li><input type="checkbox"> Alpina Bikes</li>
                    <li><input type="checkbox"> Velomobiel</li>
                    <li><input type="checkbox"> Bianchi</li>
                    <li><input type="checkbox"> Avaghon</li>
                    <li><input type="checkbox"> Overig</li>
                </ul>
            </div>
            <h3>Damesfietsen</h3>
            <div>
                <ul>
                    <li><input type="checkbox"> Elektro</li>
                    <li><input type="checkbox"> Batavus</li>
                    <li><input type="checkbox"> Gazelle</li>
                    <li><input type="checkbox"> Banshee</li>
                    <li><input type="checkbox"> Carrera</li>
                    <li><input type="checkbox"> Drymer</li>
                    <li><input type="checkbox"> Dynamo</li>
                    <li><input type="checkbox"> Alpina Bikes</li>
                    <li><input type="checkbox"> Velomobiel</li>
                    <li><input type="checkbox"> Bianchi</li>
                    <li><input type="checkbox"> Avaghon</li>
                    <li><input type="checkbox"> Overig</li>
                </ul>
            </div>
        </div>
    </aside>
    <div class="grid">
        <?php foreach($fietsen as $fiets): ?>
        <article>
            <img src="assets/img/fiets.png" alt="Fiets">
            <!-- <div class="rating">
                <span class="fill"></span>
                <span class="fill"></span>
                <span class="fill"></span>
                <span class="fill"></span>
                <span></span>
            </div> -->
            <h3><?= $fiets["MerkNaam"] . ' ' . $fiets["Type"]; ?></h3>
            <p class="price">Dagprijs: <span>&euro;<?= $fiets["Dagprijs"]; ?>,-</span></p>
            <p class="price">Nieuwwaarde: <span>&euro;<?= $fiets["Nieuwwaarde"]; ?>,-</span></p>
            <br>
            <button type="button" class="addToCart btn btn-primary">Voeg toe</button>
        </article>
    <?php endforeach; ?>
    </div>
    <aside class="myorder">
        <h2>Mijn bestelling:</h2>
        <div class="accordion">
            <h3>Fietsen</h3>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Naam</th>
                            <th>Aantal</th>
                            <th>Prijs</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Elektro E-100</td>
                            <td>1</td>
                            <td>&euro;200,-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h3>Accessoires</h3>
            <div>
                <ul>
                    <li>Geen items</li>
                </ul>
            </div>
            <h3>Reizen</h3>
            <div>
                <ul>
                    <li>Geen items</li>
                </ul>
            </div>
        </div>
        <a href="#" class="btn btn-primary pay">Volgende</a>
    </aside>
    <div class="clear"></div>
</section>

<?php require_once('partials/footer.html.php'); ?>
