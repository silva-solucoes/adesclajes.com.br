<?php

class Url{

    public static function redirecionar($url){
        header("Location:".URL.DIRECTORY_SEPARATOR.$url);
    }

    public static function urlAmigavel($string) {
        $mapa = [];
        $mapa['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
        $mapa['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';
        $url = strtr(utf8_decode($string), utf8_decode($mapa['a']), $mapa['b']);
        $url = strip_tags(trim($url));
        $url = str_replace(' ', '-', $url);
        $url = str_replace(['-----', '----', '---', '--'], '-', $url);

        return strtolower(utf8_decode($url));
    }

}