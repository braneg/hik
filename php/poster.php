<?php

$filename = "../txt/posts.txt";

$file = fopen($filename, "r");

$string = fread($file, (filesize($filename)));

$post_nick = explode("654456", $string);

echo $post_nick[0];

?>