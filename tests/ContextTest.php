<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Taniko\Context\Context;

class ContextTest extends TestCase
{
    public function testValues(): void
    {
        $context = new Context();
        $context = $context
            ->set('key', 'value')
            ->set('int', 10);
        $this->assertEquals('value', $context->get('key'));
        $this->assertEquals(10, $context->get('int'));
        $this->assertNull($context->get('undefined'));
    }

    public function testHas(): void
    {
        $key = 'key';
        $context = new Context();
        $context = $context->set($key, 'value');
        $this->assertTrue($context->has($key));
        $this->assertFalse($context->has('undefined'));
    }
}