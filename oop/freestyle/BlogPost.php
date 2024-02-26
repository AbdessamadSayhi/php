<?php

class BlogPost {


    public function __construct(
        public  string $title,
        public string $body,
        public string $author,
        public dateTime $date,
        public $comments = []
    ){

    }
}