<?php

class BookList {
    private $books;

    public function __construct() {
        $this->books = array();
    }

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function getBooks() {
        return $this->books;
    }

    // Hàm sắp xếp danh sách 
    public function sortBooks($criteria) {
        usort($this->books, function ($a, $b) use ($criteria) {
            if ($criteria === 'author') {
                return strcmp($a->getAuthor(), $b->getAuthor());
            } elseif ($criteria === 'title') {
                return strcmp($a->getTitle(), $b->getTitle());
            } elseif ($criteria === 'year') {
                return $a->getPublicationYear() - $b->getPublicationYear();
            }
            return 0;
        });
    }
}

?>
