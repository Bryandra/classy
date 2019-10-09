<?php

namespace App;

use App\Exception\NotFoundException;

class UrlReader
{

    public function parse(): int
    {

        // découpe de l'url sur les "/"
        $uriParts =  explode('/', trim($_SERVER['REQUEST_URI'], '/'));

        if ($this->match($uriParts)) {
            return intval($uriParts[1]);
        }

        // pas de format d'url trouvée
        throw new \NotFoundException('URL non reconnue !');
    }

    private function match(array $parts): bool
    {

    // url de la form "annonce/<numero>"?
    return count($parts) === 2
        && $parts[0] === 'annonce'
        && is_numeric($parts[1]);

    }

}