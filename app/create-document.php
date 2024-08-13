<?php

require 'vendor/autoload.php';
require 'OpenSearchConnection.php';

$client = OpenSearchConnection::getClient();

$indexName = 'organizacao-militar';

$client->create([
    'index' => $indexName,
    #'id' => 1,
    'body' => [
        'sigla' => 'DAdM',
        'indicativo' => 'ADMSTR',
        'nome' => 'DIRETORIA DE ADMINISTRAÇÃO DA MARINHA'
    ]
]);

$client->create([
    'index' => $indexName,
    #'id' => 1,
    'body' => [
        'sigla' => 'DAbM',
        'indicativo' => 'ABASTC',
        'nome' => 'DIRETORIA DE ABASTECIMENTO DA MARINHA'
    ]
]);

$client->create([
    'index' => $indexName,
    #'id' => 1,
    'body' => [
        'sigla' => 'SGM',
        'indicativo' => 'SGERAL',
        'nome' => 'SECRETARIA-GERAL DA MARINHA'
    ]
]);

?>
