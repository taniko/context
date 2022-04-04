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
    public function get(string $key): mixed
    {
        return $this->values[$key] ?? null;
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return ContextInterface
     */
    public function set(string $key, mixed $value): ContextInterface
    {
        $context = new Context();
        $context->values = $this->values;
        $context->values[$key] = $value;
        return $context;
    }

    /**
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool
    {
        return isset($this->values[$key]);
    }
}