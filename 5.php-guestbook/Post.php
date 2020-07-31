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


