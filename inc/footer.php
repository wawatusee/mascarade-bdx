<footer>
    <div class="footerNav">
        <nav class="navfooterbloc">
            <h2>Contacts</h2>
            <address>
                <a class="maillink" href="mailto:info@bathyscaphe.be">info@bathyscaphe.be</a>
                <a class="phonelink" href="tel:+32485966694">+32(0)485 96 66 94</a>
                <div class="situationlink">rue Dieudonné Lefèvre, 215<br> 1020 Brussels - Belgium</div>
            </address>
        </nav>
        <nav class="navfooterbloc">
            <h2>Menu</h2>
            <?= $menuMain_view ?>
        </nav>
    </div>

    <nav id="menuRS" class="nav-rs">
        <?php 
        foreach ($menuRS as $item) {
            $href = htmlspecialchars($item->page);
            $title = htmlspecialchars($item->titre);
            echo "
                <a href=\"$href\" title=\"$title\" target=\"_blank\" rel=\"noopener noreferrer\">
                    <div class=\"rs $title\" aria-hidden=\"true\"></div>
                    <span class=\"sr-only\">$title</span>
                </a>
            ";
        }
        ?>
    </nav>

    <img class="footer-logo" src="<?= $repImgDeco ?>logo.svg" alt="Logo du site">
</footer>