<?php
$menuMain_model = $menus->getMenu("Main_menu");
require_once("../src/view/view_menus.php");
$menusView = new ViewMenu($lang);
$menuMain_view = $menusView->getViewMainMenu($menuMain_model, $singlePage);
?>
<nav class="responsiveMenu" id="responsiveMenu">
    <a href="javascript:void(0);" class="icon" onclick="responsiveMenu()" aria-label="Menu principal">
        <span id="menuIcon" aria-hidden="true">☰</span>
    </a>

    <?php
    echo $menuMain_view;
    ?>

</nav>