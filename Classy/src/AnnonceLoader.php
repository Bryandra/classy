<?php

require_once SRC_DIR.'/AnnonceLoader.php';

class AnnonceLoader
{
    public function load(int $id):Annonce
    {
        return new Annonce();
    }
}