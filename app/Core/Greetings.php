<?php

namespace App\Core;

class Greetings
{
    /**
     * Create a new class instance.
     */
    public array $data;
    public function __construct()
    {
        //
    }

    public function greet(string $name): string
    {
        return 'Hello, ' . $name . '!';
    }

    public function dataList() : array
    {
        return ['foo', 'bar'];
    }
}
