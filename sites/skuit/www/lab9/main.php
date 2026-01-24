<?php
class Book {
    public string $title;
    public string $author;
    public int $year;

    public function getInfo(): string {
        return "Название: {$this->title}, Автор: {$this->author}, Год: {$this->year}";
    }
}

$book1 = new Book();
$book1->title = "Преступление и наказание";
$book1->author = "Фёдор Достоевский";
$book1->year = 1866;

$book2 = new Book();
$book2->title = "Мастер и Маргарита";
$book2->author = "Михаил Булгаков";
$book2->year = 1967;

echo $book1->getInfo() . "\n";
echo $book2->getInfo() . "\n";

class BookWithConstructor extends Book {
    public function __construct(string $title, string $author, int $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }
}
$book3 = new BookWithConstructor("1984", "Джордж Оруэлл", 1949);
echo $book3->getInfo() . "\n";