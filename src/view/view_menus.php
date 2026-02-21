<?php
/**
 * La classe ViewMenu produit les élements d'un menu au format html
 * /**
 * @param array $menuArray Tableau contenant les objets avec "page" et "titre"
 * @param bool $singlePage Si vrai, le menu pointe vers des anchors locales
 * @return string Le HTML du menu
 */

 
class ViewMenu
{
    /**
     * @var string an html usable menu
     * @param $menuArray an array wich contains most of time elements with pairs[page:"value", titre:"value"]
     */
    private $viewMenu = " ";
    private $lang;
    public function __construct($lang)
    {
        $this->lang = $lang;
    }
    public function getViewMainMenu(array $menuArray, $singlePage)
    {
        $viewMenu = ""; // local et indépendant
        foreach ($menuArray as $item) {
            if ($singlePage) {
                $viewMenu .= "<a class='itemMenu' href='#" . $item->page . "'>" . $item->titre->{$this->lang} . "</a>";
            } else {
                $viewMenu .= "<a class='itemMenu' href='?page=" . $item->page . "&lang=" . $this->lang . "'>" . $item->titre->{$this->lang} . "</a>";
            }
        }
        return $viewMenu;
    }

    public function getViewMainMenuFromExt(array $menuArray, $singlePage = true)
    {
        foreach ($menuArray as $item) {
            $this->viewMenu .= "<a class='itemMenu' href='index.php?lang=" . $this->lang . "#" . $item->page . "'>" . $item->titre->{$this->lang} . "</a>";
        }
        $viewMenu = $this->viewMenu;
        return $viewMenu;
    }
}
