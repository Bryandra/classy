<?php

namespace App\database;

use App\Exception\NotFoundException;
use App\Annonce;

class AnnonceLoader
{

    private $connexion;

    public function __construct(DatabaseConnexion $connexion)
    {
        $this->connexion = $connexion->getPdo();
    }

    public function load(int $id): Annonce
    {

        $statement = $this->connexion->prepare(

            'SELECT id, title, content, publishedAt FROM annonce WHERE id=:id'

        );

        $statement->bindValue(':id', $id, \PDO::PARAM_INT);

        $statement->execute();

        $annonce = $statement->fetchObject(Annonce::class);

        if (!$annonce) {
            throw new NotFoundException('Cette annonce n\'existe pas !');
        }

        return $annonce;

    }
    public function loadAll()
    {

        $statement = $this->connexion->prepare(

            'SELECT id, title, content, publishedAt FROM annonce'

        );

        $statement->execute();

        $annonces = $statement->fetchAll(\PDO::FETCH_CLASS, Annonce::class);

        if (!$annonces) {
            throw new NotFoundException('Cette annonce n\'existe pas !');
        }

        return $annonces;

    }

}
