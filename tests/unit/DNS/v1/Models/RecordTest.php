<?php declare(strict_types=1);

namespace Rackspace\Test\DNS\v1\Models;

use OpenCloud\Test\TestCase;
use Rackspace\DNS\v1\Api;
use Rackspace\DNS\v1\Models\Record;

class RecordTest extends TestCase
{
    private $record;

    public function setUp()
    {
        parent::setUp();

        $this->rootFixturesDir = dirname(__DIR__);

        $this->record = new Record($this->client->reveal(), new Api());
    }

    public function test_it_creates()
    {
    }

    public function test_it_updates()
    {
    }

    public function test_it_lists()
    {
    }

    public function test_it_deletes()
    {
    }

    public function test_it_retrieves()
    {
    }
}