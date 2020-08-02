<?php

declare(strict_types=1);
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

class Post {
    private string $author;
    private string $guestMessage;
    private DateTimeImmutable $date;

    /**
     * Post constructor.
     * @param string $author
     * @param string $guestMessage
     */
    public function __construct(string $author, string $guestMessage)
    {
        $this->author = $author;
        $this->guestMessage = $guestMessage;
        $this->date = new DateTimeImmutable();
    }


}


class PostLoader {
    private const FILE_NAME = 'posts.txt';

    /** @var POST[] */
    private array $posts;
    public function __construct()
    {
        $posts = unserialize(file_get_contents(self::FILE_NAME));

        if(is_array($posts)) {
            $this->posts = $posts;
        }
    }

    public function addPost(Post $post)
    {
        $this->posts[] = $post;
    }

    public function savePosts() : void
    {
        file_put_contents(self::FILE_NAME, serialize($this->posts));
    }

    public function getPosts() : array
    {
        //@todo limit the number of posts to return, make sure the newest one is on top
        return $this->posts;
    }
}

