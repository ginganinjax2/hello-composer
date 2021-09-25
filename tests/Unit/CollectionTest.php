<?php
declare(strict_types=1);

namespace Tests\Unit;

use ginganinjax2\HelloComposer\Collection;
use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
    public function testPush()
    {
        $testItem = 'some string';

        $col = new Collection();
        $col->push($testItem);

        $colArray = $col->toArray();

        $this->assertEquals($testItem, $colArray[0]);
    }

    public function testGetWithNoIndex()
    {
        $testItem = 'some string';

        $col = new Collection([$testItem]);

        $this->assertEquals($testItem, $col->get());
    }

    public function testGetWithIndex()
    {
        $testItem = ['first' => 'value'];

        $col = new Collection($testItem);

        $this->assertEquals($testItem['first'], $col->get('first'));
    }
}
