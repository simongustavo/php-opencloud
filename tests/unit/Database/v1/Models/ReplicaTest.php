<?php declare(strict_types=1);

namespace Rackspace\Test\Database\v1\Models;

use OpenCloud\Test\TestCase;
use Rackspace\Database\v1\Api;
use Rackspace\Database\v1\Models\Replica;

class ReplicaTest extends TestCase
{
    private $replica;

    public function setUp()
    {
        parent::setUp();

        $this->rootFixturesDir = dirname(__DIR__);

        $this->replica = new Replica($this->client->reveal(), new Api());
    }

    public function test_it_creates()
    {
    }

    public function test_it_lists()
    {
    }

    public function test_it_retrieves()
    {
    }
}