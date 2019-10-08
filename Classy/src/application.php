<?php

require_once SRC_DIR.'/UrlReader.php';
require_once SRC_DIR.'/response.php';
require_once SRC_DIR.'/AnnonceLoader.php';

class Application {

    public function run(): Response {

        // regarder dans l'url
    $reader = new UrlReader();

    try {

        $id = $reader->parse();
        $loader = new AnnonceLoader();
        $annonce = $loader->load($id);
        $response = new Response('Cette page existe !');

    } catch (Exception $e) {

        $response = new Response('Cette page n\'existe pas !', 404);

    }

    return $response;
}
}