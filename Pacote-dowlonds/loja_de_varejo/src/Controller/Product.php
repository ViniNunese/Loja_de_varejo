<?php
namespace APP\Controller;

require_once '../../vendor/autoload.php';

use APP\Utils\Redirect;
use APP\Model\Validation;
use APP\Model\Product;
use APP\Model\Provider;

if(empty($_POST)){
    Redirect::redirect(
        type:'error',
        message:'Requisição inválida!!!'
    );
}

$productName = $_POST["name"];
$productQuantity = $_POST["quantity"];
$productCost = $_POST["cost"];
$productProvider = $_POST["provider"];
$barCode = $_POST["barCode"];

$error = array();

if(!Validation::validadeName($productName))
{
    array_push($error, 'O nome do produto deve conter ao menos 5 caracteres entre letras e números!!!');
}

if(!Validation::validateNumber($productQuantity))
{
    array_push($error, 'A quantidade em estoque deve ser superior ou igual à 1 unidade!!!');
}

if(!Validation::validateNumber($productCost))
{
    array_push($error, 'o custo de aquisiçao deve ser superior à R$ 0.00');
}

if(!Validation::validateBarcode($barCode))
{
    array_push($error, 'O código de barra não é valido segundo nossos parâmetros!!!'); 
}

if($error){
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
}else{
    $product = new Product(
        name: $productName,
        barCode: $barCode,
        fixedCost: 0.5,
        cost: $productCost,
        tributes: 0.75,
        quantity: $productQuantity,
        provider: new Provider()
    );
    echo "<pre>";
    var_dump($product);
    echo "</pre>";
    exit;
    Redirect::redirect(
        message:'Produto cadastrado com sucesso!!!'
    );
}