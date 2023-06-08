<?php
session_start();
ob_start();
define('4578S9', true);

include './../application/System/Config.php';
include './../application/autoload.php';

$rotas = new Rota();
