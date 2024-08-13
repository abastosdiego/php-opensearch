<?php

require 'vendor/autoload.php';
require 'OpenSearchConnection.php';

$client = OpenSearchConnection::getClient();

$indexName = 'organizacao-militar';

$pesquisa = "";
if (isset($_GET['pesquisa'])) {
    $pesquisa = $_GET['pesquisa'];    
}

// Search for it
$array = $client->search([
    'index' => $indexName,
    'body' => [
        'size' => 5,
        'query' => [
            'multi_match' => [
                'query' => $pesquisa
            ]
        ]
    ]
]);

// Converte o array para JSON
$json = json_encode($array);

// Define o cabeçalho para retorno em JSON
header('Content-Type: application/json');

// Retorna o JSON
echo $json;

?>
