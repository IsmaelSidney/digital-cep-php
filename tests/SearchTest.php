<?php

use PHPUnit\Framework\TestCase;

use Ismael\Cepdigital\Search;

final class SearchTest extends TestCase
{
  /**
   * @dataProvider dadosTeste
   */
  public function testGetAdressFromZipcodeDefaulUsage(string $input, array $esperado)
  {
    $resultado = new Search;
    $resultado = $resultado->getAdressFromZipcode($input);
  
    $this->assertEquals($esperado,$resultado);
  }

  public function dadosteste(){
    return [
      "Rua Honduras" => ["60360500",[
        "cep" => "60360-500",
      "logradouro" => "Rua Honduras",
      "complemento" => "",
      "bairro" => "Padre Andrade",
      "localidade" => "Fortaleza",
      "uf" => "CE",
      "ibge" => "2304400",
      "gia" => "",
      "ddd" => "85",
      "siafi" => "1389"
      ]
      ],
      "Outro endereço" => ["60360500",[
        "cep" => "60360-500",
      "logradouro" => "Rua Honduras",
      "complemento" => "",
      "bairro" => "Padre Andrade",
      "localidade" => "Fortaleza",
      "uf" => "CE",
      "ibge" => "2304400",
      "gia" => "",
      "ddd" => "85",
      "siafi" => "1389"]
      ]
    ];
  }
}
