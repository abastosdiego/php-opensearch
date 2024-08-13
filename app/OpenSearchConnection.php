<?php

require 'vendor/autoload.php';

use \OpenSearch\Client;
use \OpenSearch\ClientBuilder;

class OpenSearchConnection
{
    private static $instance = null;
    private Client $client;

    private function __construct()
    {
        $this->client = ClientBuilder::create()
            ->setHosts(['https://opensearch-node1:9200', 'https://opensearch-node2:9200'])
            ->setBasicAuthentication('admin', 'u9P208ssZe')
            ->setSSLVerification(false)
            ->build();
    }

    public static function getClient() : Client
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance->client;
    }
}