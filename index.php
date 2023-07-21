<?php


require_once 'Book.php';
require_once 'BookList.php';

$bookList = new BookList();
$bookList->addBook(new Book('Book A', 'Author A', 'Publisher X', 2020, 'ISBN-A', ['Chapter 1', 'Chapter 2']));
$bookList->addBook(new Book('Book B', 'Author B', 'Publisher Y', 2018, 'ISBN-B', ['Chapter 1', 'Chapter 2', 'Chapter 3']));
$bookList->addBook(new Book('Book C', 'Author C', 'Publisher Z', 2022, 'ISBN-C', ['Chapter 1']));

if (isset($_GET['sort'])) {
    $sortCriteria = $_GET['sort'];
    $bookList->sortBooks($sortCriteria);
}



$books = $bookList->getBooks();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Management</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Book List</h1>
    <a href="?sort=author">Sort by Author</a> |
    <a href="?sort=title">Sort by Title</a> |
    <a href="?sort=year">Sort by Year</a>
    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Publication Year</th>
            <th>ISBN</th>
            <th>Chapters</th>
        </tr>
        <?php foreach ($books as $book): ?>
            <tr>
                <td><?php echo $book->getTitle(); ?></td>
                <td><?php echo $book->getAuthor(); ?></td>
                <td><?php echo $book->getPublisher(); ?></td>
                <td><?php echo $book->getPublicationYear(); ?></td>
                <td><?php echo $book->getISBN(); ?></td>
                <td><?php echo implode(', ', $book->getChapters()); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
