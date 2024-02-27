<?php

class Animal
{
    public function whoAmI()
    {
        echo "I am an animal.\n";
    }
}

class Dog extends Animal
{
    public function whoAmI()
    {
        echo "I am a dog.\n"; // Overrides the parent's method
    }
}