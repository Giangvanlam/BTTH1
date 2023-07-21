<?php

require_once 'IBook.php';
class Book implements IBook {
    private $title;
    private $author;
    private $publisher;
    private $publicationYear;
    private $isbn;
    private $chapters;

    public function __construct($title, $author, $publisher, $publicationYear, $isbn, $chapters) {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->publicationYear = $publicationYear;
        $this->isbn = $isbn;
        $this->chapters = $chapters;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getPublisher() {
        return $this->publisher;
    }

    public function getPublicationYear() {
        return $this->publicationYear;
    }

    public function getISBN() {
        return $this->isbn;
    }

    public function getChapters() {
        return $this->chapters;
    }
}

?>
