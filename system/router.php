<?php

spl_autoload_register(function($className){
    require_once 'application/controllers/'.$className.'.php';
});

#Route recebe tudo que vem depois /.
$route = filter_input(INPUT_GET, "url", FILTER_DEFAULT);

$routes=[
    '' => 'MainController::home',
    'index' => 'MainController::home',
    'Cadastrar' => 'MainController::cadastrar',
    'portifolio' => 'PortifolioController::index',
    'forms/contact' => 'MainController::envioEmail',
    'noticias' => 'NewsController::index',
    'noticia/' => 'NewsDescriptionController::index',
    'bid' => 'BidController::index',
    'futsal' => 'EsportesController::futsal',
    'hidroginastica' => 'EsportesController::hidroginastica',
    'natacao' => 'EsportesController::natacao',
    'taekwondo' => 'EsportesController::taekwondo',
    'volei' => 'EsportesController::volei',
    'galeria_fotos' => 'EsportesController::galeria',
    'quadro_atletas' => 'EsportesController::atletas',
    'login' => 'LoginController::login',
    'recuperar-senha' => 'LoginController::recuperar_senha',
    'painel' => 'LoginController::painel',
    '404' => 'MainController::error',
];



if(isset($routes[$route]))
{
    call_user_func( $routes[ $route ] );
}else{
    call_user_func( $routes['404'] );
}

?>