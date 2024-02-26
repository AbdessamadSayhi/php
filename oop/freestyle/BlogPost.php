<?php

class BlogPost {


    public function __construct(
        private string $title,
        private string $body,
        private string $author,
        private dateTime $date,
        private $comments = []
    ){

    }

    public function addBlogPost(){
        echo '...';
    }
}