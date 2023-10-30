<?php

Class Menu {
    public static $menu = array();
    
    public static function setMenu() {
        self::$menu = array();
        $connection = Database::getConnection();
        $stmt = $connection->query("select url, nev, jogosultsag from menu where jogosultsag like '".$_SESSION['userlevel']."'order by sorrend");
        while($menuitem = $stmt->fetch(PDO::FETCH_ASSOC)) {
            self::$menu[$menuitem['url']] = array($menuitem['nev'], $menuitem['jogosultsag']);
        }
    }

    public static function getMenu($sItems) {
        
        $menu = "<ul class=\"navbar-nav\">";
        foreach(self::$menu as $menuindex => $menuitem)       
        {
            $menu.= "<li class=\"nav-item\"><a href='".SITE_ROOT.$menuindex."' ".($menuindex==$sItems[0]? "class=nav-link active'":"class='nav-link'").">".$menuitem[0]."</a></li>";
        }
        $menu.="</ul>";
        
        return $menu;
    }
    
}

Menu::setMenu();
?>
