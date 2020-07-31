<?php


class PostLoader {
    private const FILE_NAME = 'posts.txt';

    /** @var POST[] */
    private array $posts;
    public function __construct()
    {
        // reverses the serialize
        $posts = unserialize(file_get_contents(self::FILE_NAME));

        if(is_array($posts)) {
            $this->posts = $posts;

        }else
        {
            $this->posts = [];
        }
    }

    public function addPost(Post $post)
    {
        $this->posts[] = $post;
    }

    public function savePosts() : void
    {
        // serialize converts array into string
        file_put_contents(self::FILE_NAME, serialize($this->posts));
    }

    public function getPosts() : array
    {
        //@todo limit the number of posts to return, make sure the newest one is on top
        return $this->posts;
    }
}

