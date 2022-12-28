<section class="helpdesk">
    <div>
        <span class="close">X</span>
        <p>Stel hieronder uw vraag:</p>
        <input type="text" placeholder="Uw vraag">
        <button type="button" class="btn btn-primary">Verzenden</button>
    </div>
</section>
<footer>
    <div class="inner grid">
        <article class="company-info">
            <h3>Contact</h3>
            <ul>
                <li>Dorpstraat 12</li>
                <li>1234 AB STAD</li>
            </ul>
            <ul>
                <li>Tel: 012-3456789</li>
                <li>Mob: 06-12345678</li>
                <li>E-mail: info@biker.nl</li>
            </ul>
        </article>
        <article class="opening-hours">
            <h3>Openingstijden</h3>
            <ul>
                <li><span class="day">Zo:</span> Gesloten</li>
                <li><span class="day">Ma:</span> 10:00 - 18:00</li>
                <li><span class="day">Di:</span> 09:00 - 17:00</li>
                <li><span class="day">Wo:</span> 09:00 - 17:00</li>
                <li><span class="day">Do:</span> 09:00 - 17:00</li>
                <li><span class="day">Vr:</span> 09:00 - 18:00</li>
                <li><span class="day">Za:</span> Gesloten</li>
            </ul>
        </article>
        <article class="newsletter">
            <h3>Nieuwsbrief</h3>
            <input type="email" placeholder="Uw e-mailadres">
            <button type="button" class="btn btn-primary">Aanmelden</button>
        </article>
        <article class="social-media">
            <h3>Volg ons!</h3>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </article>
    </div>
    <div class="copyright">
        <div class="inner">
            <nav class="submenu">
                <a href="algemene-voorwaarden.php" class="<?php if($page == "algemene-voorwaarden"){ echo "active"; }; ?>">Algemene Voorwaarden</a>
                <a href="garantie.php" class="<?php if($page == "garantie"){ echo "active"; }; ?>">Garantie</a>
                <a href="privacy.php" class="<?php if($page == "privacy"){ echo "active"; }; ?>">Privacy Statement</a>
                <a href="cookie-policy.php" class="<?php if($page == "cookie-policy"){ echo "active"; }; ?>">Cookie Policy</a>
                <a href="contact.php" class="<?php if($page == "contact"){ echo "active"; }; ?>">Contact</a>
                <a class="help">Helpdesk</a>
            </nav>
            <p>&copy; <?= date('Y'); ?> - Biker | All rights reserved</p>
        </div>
    </div>
</footer>
