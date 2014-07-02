<?php 

require_once 'core/App.php';
require_once 'core/Controller.php';


$root = $_SERVER['DOCUMENT_ROOT'];
$host = 'http://'.$_SERVER['HTTP_HOST'];

define("ASSETS", $host."/");
define("ROOT", $root);
define("WIDGETS", $root."/views/widgets/");