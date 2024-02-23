<?php

spl_autoload_register(function ($class) {
    // The base directory for the namespace prefix
    $base_dir = __DIR__ . '/'; // Adjust this path if your autoloader is not in the same directory as your classes

    // get the relative class name from the namespace
    $relative_class = str_replace('freestyle\\', '', $class);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});

use freestyle\Animal;

// Create an instance of the Animal class
$animal = new Animal('Max', 'Mammal', 5);

// Output the name of the animal
echo $animal->getName(); // Output: Max
