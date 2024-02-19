<?php

require('magic_methods.php');

$invoice = new Invoice(7, 99.99);
var_dump($invoice->expDate);
