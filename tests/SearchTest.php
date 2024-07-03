<?php

use Cleberjunior\DigitalCep\Search;
use PHPUnit\Framework\TestCase;

class SearchTest extends TestCase
{
    public function testGetAdressFromZipCodeDefaultUsage()
    {
        $search = new Search();
        $resultado = $search->getAddressFromZipcode('47802303');

        $esperado = [
            "cep" => "47802-303",
            "logradouro" => "Rua Odontino Lopes",
            "complemento" => "",
            "unidade" => "",
            "bairro" => "Jardim Ouro Branco",
            "localidade" => "Barreiras",
            "uf" => "BA",
            "ibge" => "2903201",
            "gia" => "",
            "ddd" => "77",
            "siafi" => "3363",
        ];

        $this->assertEquals($esperado, $resultado);
    }
}