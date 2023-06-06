<?php
session_start();
ob_start();
define('4578S9', true);
?>

<?php
require './vendor/autoload.php';
use System\ConfigController as Home;

$url = new Home();
$url->carregar();
?>