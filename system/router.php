<?php

spl_autoload_register(function($className){
    require_once 'application/controllers/'.$className.'.php';
});

#Route recebe tudo que vem depois /.
$route = filter_input(INPUT_GET, "url", FILTER_DEFAULT);

$routes=[
    '' => 'MainController::home',
    'index' => 'MainController::home',
    'portifolio' => 'PortifolioController::index',
    'forms/contact' => 'MainController::envioEmail',
    'noticias' => 'NewsController::index',
    'noticia/' => 'NewsDescriptionController::index',
    'sobre' => 'SobreController::index',
    '404' => 'MainController::error',
];



if(isset($routes[$route]))
{
    call_user_func( $routes[ $route ] );
}else{
    call_user_func( $routes['404'] );
}

?>