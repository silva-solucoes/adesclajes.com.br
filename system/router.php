<?php

spl_autoload_register(function($className){
    require_once 'application/controllers/'.$className.'.php';
});

#Route recebe tudo que vem depois /.
$route = filter_input(INPUT_GET, "url", FILTER_DEFAULT); #$_GET['_route_'];#substr($_SERVER["QUERY_STRING"], 8);

$routes=[
    '' => 'MainController::home',
    'index' => 'MainController::home',
    'noticias' => 'NewsController::index',
    '404' => 'MainController::error',
];



if(isset($routes[$route]))
{
    call_user_func( $routes[ $route ] );
}else{
    call_user_func( $routes['404'] );
}

?>