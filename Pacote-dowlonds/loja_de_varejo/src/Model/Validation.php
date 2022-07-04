<?php

namespace APP\Model;

class Validation
{
    public static function validadeName(string $name):bool
    {
        return mb_strlen($name) > 1;
    }

    public static function validateNumber(int | float $value)
    {
        return $value > 0.00;
    }

    public static function validateBarcode(string $barCode):bool
    {
        return mb_strlen($barCode) == 13 &&  mb_substr($barCode, 0, 3) == '789';
    }

    public static function validateCnpj(string $cnpj):bool
    {
        return mb_strlen($cnpj) ==13;
    }

    public static function validateTelephone(int $telephone):bool
    {
        return mb_strlen($telephone) ==10;
    }
}