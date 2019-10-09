<?php


namespace App;


use App\database\DatabaseConnexion;

class Controller
{

    public function __construct(DatabaseConnexion $connection)
    {
        $this->connection = $connection;
    }

    public function index()
    {
        echo 'Je suis dans index';
    }

    public function show(int $id): Response
    {
        $loader = new AnnonceLoader($this->connection);
        $annonce = $loader->load($id);
        $annonceHtml = new AnnonceHtml();
        return new Response($annonceHtml->build($annonce));
    }
}