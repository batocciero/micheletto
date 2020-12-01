<?php

// Utilizar esse link em produção.
//define("ROOT", "https://vinhosmicheletto.com.br");
//define("ROOT", "http://localhost/micheletto");
// define("ROOT", "http://testandosite.epizy.com");

// for docker
define("ROOT", "http://localhost:8000/");

define("SITE",":: Vinhos Micheletto");

/**
 * @param string|null $uri
 * @return string
 */
function url(string $uri = null): string
{
    if ($uri) {
        return ROOT . "/{$uri}";
    }

    return ROOT;
}
