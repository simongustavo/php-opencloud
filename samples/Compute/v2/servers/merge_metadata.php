<?php

require 'vendor/autoload.php';

$rackspace = new Rackspace\Rackspace([
    'username' => '{username}',
    'apiKey'   => '{apiKey}',
]);

$service = $rackspace->computeV2(['region' => '{region}']);

$server = $service->getServer('{id}');

$server->mergeMetadata([
    'key2' => 'val2'
]);