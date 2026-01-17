<?php

$bookName = "Тихий Дон";
$bookAuthor = "Михаил Шолохов";
$bookYear = 1928;
$bookDescription = "«Тихий Дон» — эпический роман-эпопея Михаила Шолохова в четырёх томах, повествующий о жизни донского казачества в переломный период истории (Первая мировая война, революция 1917 года и Гражданская война). Центральный герой, Григорий Мелехов, метается между двумя лагерями, пытаясь найти правду и своё место в мире, охваченном братоубийственной бойней. Роман стал масштабной картиной трагедии народа и личности, за что автор был удостоен Нобелевской премии по литературе в 1965 году.";
$studentName = "Вадим Первушов";

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $bookName; ?> — Детальная страница</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header, footer {
            background-color: #333;
            color: white;
            padding: 15px 20px;
            text-align: center;
            flex-shrink: 0;
        }

        main {
            flex: 1;
            padding: 20px;
            background-color: white;
            max-width: 800px;
            margin: 20px auto 0 auto;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            margin-top: 0;
        }
    </style>
</head>
<body>

<header>
    <h2>Книжный каталог</h2>
    <p>Студент: <?php echo $studentName; ?></p>
</header>

<main>
    <h1><?php echo $bookName; ?></h1>

    <p><strong>Автор: </strong> <?php echo $bookAuthor; ?></p>
    <p><strong>Год издания: </strong> <?php echo $bookYear; ?></p>

    <p><?php echo $bookDescription; ?></p>
</main>

<footer>
    <p>Лабораторная работа N10 - <?php echo $studentName; ?></p>
</footer>
</html>