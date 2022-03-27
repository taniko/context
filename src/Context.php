<?php

namespace Taniko\Context;

class Context implements ContextInterface
{
    /**
     * @var array<string,mixed>
     */
    private array $values = [];

    /**
     * @param string $key
     * @return mixed
     */
    public function value(string $key): mixed
    {
        return $this->values[$key] ?? null;
    }

    /**
     * set context value
     * @param string $key
     * @param mixed $value
     * @return Context
     */
    public function withValue(string $key, mixed $value): Context
    {
        $context = new Context();
        $context->values = $this->values;
        $context->values[$key] = $value;
        return $context;
    }
}