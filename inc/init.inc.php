<?php
$mysqli = new mysqli("localhost", "root", "", "site");
if ($mysqli->connect_error) die('Un problème est survenu lors de la tentative de connexion à la BDD : ' . $mysqli->connect_error);
session_start();
define("RACINE_SITE","/site/");
$contenu = '';
require_once("fonction.inc.php");