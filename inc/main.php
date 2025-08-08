<main>
<?php
$pagesArray = PAGE_ARRAY;
$defaultPage = $pagesDuMenus[0];

if (!$singlePage): 
    // MULTIPAGE
    if (isset($_GET["page"])) {
        $page = htmlspecialchars($_GET["page"]);
        $titre = $page;

        if (preg_match('/^[a-zA-Z0-9_-]+$/', $page) && in_array($page, $pagesArray)) {
            require_once __DIR__ . '/pages/' . $page . '.php';
        } else {
            // Page invalide : afficher la page 404
            require_once __DIR__ . '/pages/404.php';
        }
    } else {
        require_once __DIR__ . '/pages/' . $defaultPage . '.php';
    }
else:
    // SINGLEPAGE
    foreach ($pagesDuMenus as $page) {
        require_once __DIR__ . '/pages/' . $page . '.php';
    }
endif;
?>
</main>
