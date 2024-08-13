<?php

require 'vendor/autoload.php';
require 'OpenSearchConnection.php';

use \OpenSearch\ClientBuilder;

$client = OpenSearchConnection::getClient();
var_dump($client->info());

?>
