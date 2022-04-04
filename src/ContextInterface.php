<?php

namespace Taniko\Context;

interface ContextInterface
{
    /**
     * @param string $key
     * @return mixed
     */
    public function get(string $key): mixed;

    /**
     * @param string $key
     * @param mixed $value
     * @return ContextInterface
     */
    public function set(string $key, mixed $value): ContextInterface;

    /**
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool;
}