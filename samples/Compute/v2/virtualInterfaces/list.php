<?php

require 'vendor/autoload.php';

$rackspace = new Rackspace\Rackspace([
    'username' => '{username}',
    'apiKey'   => '{apiKey}',
]);

$service = $rackspace->computeV2(['region' => '{region}']);

/** @var \Rackspace\Compute\v2\Models\Server $server */
$server = $service->getServer('{serverId}');

foreach ($server->listVirtualInterfaces() as $virtualInterface) {
    /** @var $virtualInterface Rackspace\Compute\v2\Models\VirtualInterface */
}