<?php

$post = $_POST["new_post"];

$nick = $_POST["nick"];

$file = fopen("../txt/posts.txt", "a");

fwrite($file, $post . "456654" . $nick . "654456");

fclose($file);

header("Location: http://hikweb.eu/");
die();

?>