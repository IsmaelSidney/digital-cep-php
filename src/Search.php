<?php

namespace Ismael\Cepdigital;

class Search
{
    private $url = 'https://viacep.com.br/ws/';

    public function getAdressFromZipcode(string $zipCode): array
    {
        $zipCode =  preg_replace('/[^0-9]/im', '', $zipCode);

        $get = file_get_contents($this->url . $zipCode . "/json");

        print_r($get);
        return (array) json_decode($get);
    }
}
