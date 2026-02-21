<?php
// =========================================================
// CHEMINS
// =========================================================
define('ROOT_PATH', realpath(__DIR__ . '/../') . DIRECTORY_SEPARATOR);
define('ROOT',      '../');
define('PUBLIC_URL', '../public/');

define('IMG_URL', PUBLIC_URL . 'img/');
$repMedias   = IMG_URL;
$repDeco     = IMG_URL . 'deco/';
$repImg      = IMG_URL . 'content/';
$repImgDeco  = IMG_URL . 'deco/';

define('JSON', ROOT_PATH . 'json/');

// =========================================================
// MODÈLES
// =========================================================
require_once ROOT_PATH . 'src/model/config_model.php';
require_once ROOT_PATH . 'src/model/menus_model.php';

// =========================================================
// CONFIGURATION DU SITE
// =========================================================
$singlePage       = ConfigModel::isSinglePage();
$str_titleWebSite = ConfigModel::getTitle();

// =========================================================
// LANGUES
// =========================================================
$langs = ConfigModel::getLangs();

if (isset($_GET['lang']) && array_key_exists($_GET['lang'], $langs)) {
    $lang = $_GET['lang'];
} else {
    $lang = ConfigModel::getDefaultLang();
}

define('APP_LANG', $lang);

// =========================================================
// MENUS
// =========================================================
$menus         = new MenusModel(JSON . 'menus.json');
$menuMain      = $menus->getMenu('Main_menu');
$menuRS        = $menus->getMenu('RS_menu');

// Liste des pages disponibles (pour la navigation et la sécurité)
$pagesDuMenus  = array_column((array) $menuMain, 'page');
define('PAGE_ARRAY', $pagesDuMenus);
