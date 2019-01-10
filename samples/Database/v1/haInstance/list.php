<?php

require 'vendor/autoload.php';

$rackspace = new Rackspace\Rackspace([
    'username' => '{username}',
    'apiKey'   => '{apiKey}',
]);

$service = $rackspace->databaseV1(['region' => '{region}']);

foreach ($service->listHaInstance('{id}') as $haInstance) {
    /** @var $haInstance Rackspace\Database\v1\Models\HaInstance */
}