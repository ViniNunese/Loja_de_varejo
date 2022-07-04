<?php

namespace APP\Controller;

require_once '../../vendor/autoload.php';

use APP\Model\Provider;
use APP\Utils\Redirect;
use APP\Model\Address;
use APP\Model\Validation;

if(empty($_POST)){
    redirect::redirect(
        type:'error',
        message:'Requisição inválida!!!'
    );
}

$providerCnpj = $_POST["cnpj"];
$providerName = $_POST["name"];
$providerTelephone = $_POST["telephone"];

$error = array();

if(!Validation::validateCnpj($providerCnpj))
{
    array_push($error, 'o CNPJ não deve passar de 13 caracteres');
}

if(!Validation::validadeName($providerName))
{
    array_push($error, 'O nome do fornecedor deve conter ao menos 3 caracteres');
}

if(!Validation::validateTelephone($providerTelephone))
{
    array_push($error, 'o telefone tem que ter no maximo 10 digitos');
}

if($error){
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
}else{
    $provider = new Provider(
        cnpj: $providerCnpj,
        name: $providerName,
        telephone: $providerTelephone,
        address: new Address()
    );
    Redirect::redirect(
        message:'Fornecedor cadastrado com sucesso!!!'
    );
}