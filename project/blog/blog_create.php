<?php
require_once('./blog.php');

$blogs = $_POST;

$blog = new Blog();
$blog->blogValidate($blogs);
$blog->blogCreate($blogs);

?>
<p?><a href="blog_home.php">戻る</a></p>