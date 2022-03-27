<?php

namespace Taniko\Context;

interface ContextInterface
{
    /**
     * get value
     * @param string $key
     * @return mixed
     */
    public function value(string $key): mixed;
}