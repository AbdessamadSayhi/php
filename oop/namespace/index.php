<?php

declare(strict_types=1);

use PaymentGateway\Stripe\Transaction as stripe;
use PaymentGateway\Padle\Transaction as padle;

spl_autoload_register(function ($class) {
    $path = str_replace('/', '\\', __DIR__ . '/' . $class) . '.php';
    if (file_exists($path)) require $path;
});

