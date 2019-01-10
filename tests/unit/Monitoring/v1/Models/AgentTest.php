<?php declare(strict_types=1);

namespace Rackspace\Test\Monitoring\v1\Models;

use OpenCloud\Test\TestCase;
use Rackspace\Monitoring\v1\Api;
use Rackspace\Monitoring\v1\Models\Agent;

class AgentTest extends TestCase
{
    private $agent;

    public function setUp()
    {
        parent::setUp();

        $this->rootFixturesDir = dirname(__DIR__);

        $this->agent = new Agent($this->client->reveal(), new Api());
    }

    public function test_it_lists()
    {
    }

    public function test_it_retrieves()
    {
    }
}
