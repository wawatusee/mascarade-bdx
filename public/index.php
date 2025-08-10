<?php

/* Config.php
les adresses des répertoires utiles du site
instancie Config_model qui nous donnera de quoi traiter les langues,
le titre,
le comportement singlepage.*/
require_once "../config/config.php";

?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang ?? 'fr', ENT_QUOTES, 'UTF-8') ?>" prefix="og:http://ogp.me/ns#">
    <?php require_once "../inc/head.php"; ?>
    <body>
        <?php
        if (!$singlePage) {
            // tu peux insérer ici une navigation par pages ou des éléments spécifiques
        } else {
            echo "singlePage = vrai";
        }
        require_once "../inc/header.php";
        require_once "../inc/main.php";
        require_once "../inc/footer.php";
        ?>
    </body>
</html>
