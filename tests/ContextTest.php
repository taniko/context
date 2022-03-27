<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Taniko\Context\Context;

class ContextTest extends TestCase
{
    public function testWithValue()
    {
        $context = new Context();
        $context = $context
            ->withValue('key', 'value')
            ->withValue('int', 10);
        $this->assertEquals('value', $context->value('key'));
        $this->assertEquals(10, $context->value('int'));
        $this->assertNull($context->value('undefined'));
    }
}