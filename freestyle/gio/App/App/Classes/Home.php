<?php


namespace App\Classes;


class Home
{
    public function index(){

        echo '<pre>';
        print_r($_GET);
        echo '</pre>';
        $foo = $_GET['foo'];
        $amount = $_GET['amount'];
        return "fo = $foo <br> Amount = $amount";
    }
}