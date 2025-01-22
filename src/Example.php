<?php

namespace App;

class Example
{
    public function welcome(string $name): string
    {
        return greetUser($name);;
    }
}
