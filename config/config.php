<?php
/*PATHS*/

// Dossier racine du projet (D:\)
define('ROOT_PATH', realpath(__DIR__ . '/..'));

// Dossiers principaux
define('CONFIG_PATH', ROOT_PATH . '/config');
define('JSON_PATH', ROOT_PATH . '/json');
define('SRC_PATH', ROOT_PATH . '/src');
define('PUBLIC_PATH', ROOT_PATH . '/public');

// Fichiers JSON
define('CONFIG_JSON', JSON_PATH . '/config.json');
define('MENUS_JSON', JSON_PATH . '/menus.json');

require_once SRC_PATH . '/model/config_model.php';
require_once SRC_PATH . '/model/menus_model.php';
require_once SRC_PATH . '/utils.php';
/*Fin de PATHS */

$config = new ConfigModel(CONFIG_JSON);
$menus = new MenusModel(MENUS_JSON);

// Comportement single page
$singlePage = $config->get_single_page_behaviour();

// Gestion de la langue
$langs = $config->get_langs();
$lang = (isset($_GET['lang']) && array_key_exists($_GET['lang'], $langs)) ? $_GET['lang'] : 'fr';

// Répertoires d’images
$repImg = "img/content/";
$repImgDeco = "img/deco/";

// Titre du site
$a_titleWebSite = $config->get_title();
$str_titleWebSite = $config->get_str_title();

// Menus
$menuRS = $menus->getMenu("RS_menu");

$pagesDuMenus = [];
foreach ($menus->getMenu("Main_menu") as $page) {
    $pagesDuMenus[] = $page->page;
}

define('PAGE_ARRAY', $pagesDuMenus);

// Détermination de la page à charger
$pageParam = $_GET['page'] ?? null;
$pagePath = $config->loadPage($pageParam, PAGE_ARRAY);
