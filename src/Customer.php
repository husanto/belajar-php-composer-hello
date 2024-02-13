<?php

namespace ProgrammerZamanNow\Belajar;

class Customer
{
    public function __construct(private string $name){

    }
    public function sayHello($name="Guest"):string
    {
        return "Hello $name, my name is $this->name";
    }
}