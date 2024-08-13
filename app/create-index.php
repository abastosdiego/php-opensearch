<?php

require 'vendor/autoload.php';
require 'OpenSearchConnection.php';

$client = OpenSearchConnection::getClient();

$indexName = 'organizacao-militar';

// Create an index with non-default settings.
$client->indices()->create([
    'index' => $indexName,
    'body' => [
        'settings' => [
            'index' => [
                'number_of_shards' => 4
            ],
            "analysis" => [
                "analyzer" => [
                    "default" => [
                        "type" => "portuguese"
                    ]
                ]
            ]
        ]
    ]
]);

?>
