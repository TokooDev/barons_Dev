<?php
//Chargement Static de la classe
/*
require_once("./models/IQuizz.php");
require_once("./models/User.php");
require_once("./models/Admin.php");
require_once("./models/Joueur.php");
require_once("./models/Jeu.php");
*/
//Chargement dynamique  des classes=> AutoLoading
define("BASE_URL","http://localhost/barons_Dev");
require_once("./libs/Router.php");
$router=new Router();

$router->route();
