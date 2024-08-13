<?php

require 'vendor/autoload.php';
require 'OpenSearchConnection.php';

$client = OpenSearchConnection::getClient();

$indexName = 'organizacao-militar';

$client->delete([
    'index' => $indexName,
    'id' => 1,
]);

?>
