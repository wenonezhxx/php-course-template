<?php
class Book 
{
    public static $count;
    public string $title;
    public string $author;
    public int $year;

    public function __construct(string $title, string $author, int $year) 
    {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    public function getInfo(): string 
    {
        return "Название: {$this->title}, Автор: {$this->author}, Год: {$this->year}";
    }
    public function isOld(): bool 
    {
        $currentYear = date('Y');
        return ($currentYear - $this->year) > 50;
    }
}
$books = [
    new Book("Преступление и наказание", "Фёдор Достоевский", 1866),
    new Book("Мастер и Маргарита", "Михаил Булгаков", 1967),
    new Book("1984", "Джордж Оруэлл", 1949)
];

foreach ($books as $book) {
    echo $book->getInfo() . "\n <br>";
    
    if ($book->isOld()) {
        echo "Книга '{$book->title}' старая\n <br>";
    } else {
        echo "Книга '{$book->title}' не старая\n <br>";
    }
    echo "---\n <br>";
}
class Car 
{
    public string $title;
    public string $color;
    private int $year;

    public function __construct(string $title, string $color, int $year) {
        $this->title = $title;
        $this->color = $color;  
        $this->year = $year;
    }

    public function getInfo(): string 
    {
        return "Автомобиль: {$this->title} <br>, Цвет: {$this->color} <br>, Год выпуска: {$this->year} <br>";
    }
}

$cars = [
    new Car("Toyota Camry", "черный", 2020),
    new Car("BMW X5", "белый", 2015),
    new Car("Lada Vesta", "красный", 2022)
];

foreach ($cars as $car) {
    echo $car->getInfo() . "\n <br>";
}