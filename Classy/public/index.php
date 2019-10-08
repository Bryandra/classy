<?php

require_once '../src/response.php';
require_once '../src/UrlReader.php';

// regarder dans l'url
$reader = new UrlReader();

//  TODO : mettre la construction de la réponse dans une classe
try {

    $id = $reader->parse();

    $response = new Response('Cette page existe !');

} catch (Exception $e) {

    $response = new Response('Cette page n\'existe pas !', 404);

}

$response->send(); 