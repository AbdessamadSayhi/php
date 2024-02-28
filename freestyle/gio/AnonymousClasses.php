<?php

$obj = new class('abdessamad')
{
    public function __construct(public string $name)
    {
        echo "Inside constructor\n";
    }
    public function __destruct()
    {
        echo "Inside destructor\n";
    }
};
var_dump($obj);
