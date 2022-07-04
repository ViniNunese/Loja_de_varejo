<?php

namespace APP\Model;

class Provider
{
    private string $cnpj;
    private string $name;
    private int $telephone;
    private Address $address;

    public function __construct(
        string $cnpj,
        string $name,
        int $telephone,
        address $address
    ) {
        //inicializando as propriedades
        $this->cnpj = $cnpj;
        $this->name = $name;
        $this->telephone = $telephone;
        $this->address = $address;
    }
}
