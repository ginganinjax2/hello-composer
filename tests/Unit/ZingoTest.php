<?php

namespace Tests\Unit;

use ginganinjax2\HelloComposer\Zingo;
use PHPUnit\Framework\TestCase;

final class ZingoTest extends TestCase
{
    public function testTextSetterAndGetter()
    {
        $testValue = 'this is a test';

        $zingo = new Zingo();
        $zingo->setText($testValue);

        $this->assertEquals($testValue, $zingo->getText());
    }

    public function testToStringMagic()
    {
        $testValue = 'this is a test';

        $zingo = new Zingo($testValue);

        $this->assertEquals($testValue, (string)$zingo);
    }
}
