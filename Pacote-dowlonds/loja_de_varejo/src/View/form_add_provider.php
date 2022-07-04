<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de varejo - Novo fornecedor</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="../Controller/Provider.php" method="POST">
        <section class="mx-4 mt-4 columns-3">
            <article>
                <label for="cnpj" class="cursor-pointer">CNPJ: </label>
                <input type="number" name="cnpj" id="cnpj" class="border border-blue-400 " required>
            </article>
            <article>
                <label for="name" class="cursor-pointer">Nome do fornecedor: </label>
                <input type="text" name="name" id="name" class="border border-blue-400" required>
            </article>
            <article>
                <label for="telephone" class="cursor-pointer">Telefone: </label>
                <input type="number" name="telephone" id="telephone" class="border border-blue-400" required>
            </article>
        </section>
        <section class="mx-4 mt-4 columns-3">
            <article>
                <label for="street" class="cursor-pointer">Rua: </label>
                <input type="text" name="street" id="street" class="border border-blue-400" required>
            </article>
            <article>
                <label for="houseNumber" class="cursor-pointer">N°: </label>
                <input type="number" name="houseNumber" id="houseNumber" class="border border-blue-400" required>
            </article>
            <article>
                <label for="district" class="cursor-pointer">Bairro: </label>
                <input type="text" name="district" id="district" class="border border-blue-400" required>
            </article>
        </section>
        <section class="mx-4 mt-4 columns-2">
            <article>
                <label for="city" class="cursor-pointer">Cidade: </label>
                <input type="text" name="city" id="city" class="border border-blue-400" required>
            </article>
            <article>
                <label for="postalcode" class="cursor-pointer">Cep: </label>
                <input type="number" name="postalcode" id="postalcode" class="border border-blue-400" required>
            </article>           
        </section>
        <article class="flex justify-center mt-3">
            <button type="submit" class="p-3 text-white bg-blue-700 rounded">Cadastrar</button>
        </article>
    </form>
</body>
</html>