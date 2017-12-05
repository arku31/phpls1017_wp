<form action="">
    <input type="text">
    <input type="submit">
</form>
<?php
$posts = query_posts("post_type=post");
echo "<pre>";
print_r($posts);
die();