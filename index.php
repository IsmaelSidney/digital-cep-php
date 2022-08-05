<?php

require_once "vendor/autoload.php";

use Ismael\Cepdigital\Search;

$busca = new Search();
$resultado = $busca->getAdressFromZipcode('60360500');

print_r($resultado);
