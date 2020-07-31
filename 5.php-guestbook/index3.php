<?php
//image this code could be a complex query
$users = ['John Doe', 'Joe Doe', 'John Smith', 'An Onymous'];
$articles = ['Terror over london', 'Football: a useless hobby?', 'Economic crisis ahead, says expert', 'Fortis is Fortwas'];
//end controller
//start view
require 'Post.php';
require 'PostLoader.php';

$loader = new PostLoader();

if (isset ($_POST['author']))
{
    $author = htmlspecialchars($_POST['author']);
    $guestMessage = htmlspecialchars($_POST['guestMessage']);

    if (empty($author) || empty($guestMessage))
    {
        throw new Exception("fill in your details");
    }

    $post = new Post($author, $guestMessage);
    $loader->addPost($post);
    $loader->savePosts();
    echo "messages are saved";
}


// $post = new Post('Koen', 'Hello world');
// $loader->addPost($post);
// $loader->addPost(new Post('Vinnie', 'Bye world'));
// $loader->savePosts();

var_dump($loader->getPosts());

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My site</title>
</head>
<body>
<h1>Welcome to my site!</h1>
<h2>Recent articles</h2>

<form action="#" method="post">
    Name: <input type="text" name="author"><br>
    Comment: <input type="text" name="guestMessage"><br>
    <input type="submit" value="post comment">
</form>

</body>
</html>
