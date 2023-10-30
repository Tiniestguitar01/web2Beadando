<?php

session_start();
if(! isset($_SESSION['userid'])) $_SESSION['userid'] = 0;
if(! isset($_SESSION['userfirstname'])) $_SESSION['userfirstname'] = "";
if(! isset($_SESSION['userlastname'])) $_SESSION['userlastname'] = "";
if(! isset($_SESSION['userlevel'])) $_SESSION['userlevel'] = "1__";

include(SERVER_ROOT . 'includes/database.inc.php');
include(SERVER_ROOT . 'includes/menu.inc.php');

// Felbontjuk a paramétereket. Az / elválasztó jellel végzett felbontás megfelelõ lesz.
// Az elsõ eleme a megtekinteni kívánt oldal neve, a második az aloldal (almenü ponthoz
// tartozó oldal) neve vagy paraméter lehet.

$page = "nyitolap";
$vars = array();

$request = $_SERVER['QUERY_STRING'];

if($request != "")
{
	$params = explode('/', $request);
	$page = array_shift($params);

	
	foreach($params as $p)
	{
		$vars[] = $p;
	}

	$vars += $_POST;
}

// Meghatározzuk a kért oldalhoz tartozó vezérlõt. Ha megtaláltuk
// a fájlt és a hozzá tartozó vezérlõ oldalt is, akkor betöltjük az
// elõbbiekben lekérdezett paramétereket továbbadva. 

$controllerfile = $page;
$target = SERVER_ROOT.'controllers/'.$controllerfile.'.php';
if(! file_exists($target))
{
	$target = SERVER_ROOT.'controllers/error.php';
	$vars[0] = "A vezérlő nem található";
	$vars[1] = "Hiányzó oldal <strong>".$controllerfile."</strong>";
	$controllerfile = "error";
}

include_once($target);
$class = ucfirst($controllerfile).'_Controller';
if(! class_exists($class))
{
	include_once(SERVER_ROOT.'controllers/error.php');
	$vars[0] = "A vezérlő főosztálya nem található";
	$vars[1] = "Hiányos oldal megadása <strong>".$controllerfile."</strong>";
	$class = 'Error_Controller';
}


include_once(SERVER_ROOT.'models/view_loader.php');

$controller = new $class;
$controller->main($vars);
