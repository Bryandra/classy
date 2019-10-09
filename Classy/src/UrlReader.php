<?php

namespace App;

use App\Exception\NotFoundException;

class UrlReader
{

    public function parse(): PageConfig
    {

        // découpe de l'url sur les "/"
        $uriParts = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

        return $this->match($uriParts);

        }

    private function match(array $parts): PageConfig
    {

        // url de la form "annonce"
        if (count($parts) === 1
            && $parts[0] === 'annonce'
        ) {
            return new PageConfig([
                'method' => 'index',
                'args' => [],
            ]);
        }

        // url de la form "annonce/<numero>"
        if (count($parts) === 2
            && $parts[0] === 'annonce'
            && is_numeric($parts[1])
        ) {
            return new PageConfig([
                'method' => 'show',
                'args' => ['id' => intval($parts[1])]
            ]);
        }

        throw new NotFoundException('URL non reconnue');
    }
}