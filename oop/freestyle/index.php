<?php

require_once 'BlogPost.php';

$post = new BlogPost(
    'My first blog post',
    'This is the body of my first blog post',
    'John Doe',
    new DateTime('2022-12-31'),
    []
);

echo $post->addBlogPost() . '</br>';
$reflectionProperty = new ReflectionProperty(BlogPost::class, 'title');
$reflectionProperty->setAccessible(true);
var_dump($reflectionProperty->getValue($post));
