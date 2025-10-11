<?php
$product1 = "Смартфон Apple iPhone 14";  
$product2 = "Ноутбук Lenovo ThinkPad";  
$product3 = "Умные часы Samsung Galaxy Watch";  
$product4 = "Наушники AirPods Pro";  
$product5 = "Планшет iPad Pro";  
$product6 = "Фитнес-браслет Xiaomi Mi Band";  
$product7 = "Внешний жесткий диск Seagate";  
$product8 = "Монитор LG UltraWide";  
$product9 = "Клавиатура Logitech MX Keys";  
$product10 = "Мышь Razer DeathAdder";  
$product11 = "Наушники Sony WH-1000XM4";  
$product12 = "Графический планшет Wacom";  
$product13 = "Веб-камера Logitech C930e";  
$product14 = "USB-флешка SanDisk Ultra";  
$product15 = "Портативная колонка JBL Flip";  
  
$price1 = 79990.00;  
$price2 = 95490.00;  
$price3 = 24990.00;  
$price4 = 21990.00;  
$price5 = 69990.00;  
$price6 = 3490.00;  
$price7 = 8990.00;  
$price8 = 34990.00;  
$price9 = 12990.00;  
$price10 = 7990.00;  
$price11 = 29990.00;  
$price12 = 14990.00;  
$price13 = 9990.00;  
$price14 = 1990.00;  
$price15 = 4990.00;  
    
$products = [  
    $product1, $product2, $product3, $product4, $product5,  
    $product6, $product7, $product8, $product9, $product10,  
    $product11, $product12, $product13, $product14, $product15  
];  
  
$prices = [  
    $price1, $price2, $price3, $price4, $price5,  
    $price6, $price7, $price8, $price9, $price10,  
    $price11, $price12, $price13, $price14, $price15
    ]

?>

<div class="product-list">
    <h2>Товары и цены</h2>

    <?php for ($i = 0; $i < count($products); $i++) { ?>
    <div class="product-card">
        <div class="product-name"><?= $products[$i]?></div>
    <div class="product-price"><?= $prices[$i]?> ₽</div>
    </div>
<?php } ?>
</div>

<?php
$products2 = [
    "цемент", "сухие смеси", "гипсокартон", "краски", "напольные покрытия", "пиломатериалы", "керамическая плитка", "ручной инструмент", "электроинструмент", "крепёж"
];
$prices2 = [
    "450", "250", "550", "1800", "950", "12000", "1100", "2500", "5000", "150"
]
?>
<div class="product-list">
    <h2>Товары и цены</h2>

    <?php for ($i = 0; $i < count($products2); $i++) { ?>
    <div class="product-card">
        <div class="product-name"><?= $products2[$i]?></div>
    <div class="product-price"><?= $prices2[$i]?> ₽</div>
    </div>
<?php } ?>
</div>

<?php
$items = [
    ['Краска белая', 170],
    ['Молоток', 300],
    ['Кусачки', 250],
    ['Аэрозоль', 180],
    ['Краска красная', 170],
    ['Бита', 280],
    ['Отвертка', 100],
    ['Отвертка Big', 300],
    ['Строительный уровень', 720],
    ['Линейка', 300]
]
?>

<div class="product-list">
    <h2>Товары и цены 3 </h3>

    <?php foreach ($items as $item) { ?>
    <div class="product-card">
        <div class="product-name"><?= $item[0]?></div>
        <div class="product-price"><?= $item[1]?></div>
    </div>
<?php } ?>
</div>
<?php
$goods = [
    ['name' => 'ножницы', 'price' => 100],
    ['name' => 'игрушка', 'price' => 150],
    ['name' => 'настольная игра', 'price' => 400],
    ['name' => 'каска', 'price' => 500],
    ['name' => 'дрель', 'price' => 2100],
    ['name' => 'комплект ответок', 'price' => 2500],
    ['name' => 'ключ', 'price' => 80],
    ['name' => 'фанера', 'price' => 80],
    ['name' => 'краска черная', 'price' => 180],
    ['name' => 'саморез', 'price' => 200],
]
?>

<div class="product-list">
    <h2>Товары и цены 4 </h3>

    <?php foreach ($goods as $item) { ?>
    <div class="product-card">
        <div class="product-name"><?= $item['name']?></div>
        <div class="product-price"><?= $item['price']?></div>
    </div>
<?php } ?>
</div>
<?php
$goodsRandom = [];
for ($i = 0; $i < 100; $i++) {
 $goodsRandom []= ['name' => $products[array_rand($products)], 'price' => $prices[array_rand($prices)]];
}

?>
<div class="product-list">
    <h2>Товары и цены 5 </h3>

    <?php foreach ($goodsRandom as $item) { ?>
    <div class="product-card">
        <div class="product-name"><?= $item['name']?></div>
        <div class="product-price"><?= $item['price']?></div>
    </div>
<?php } ?>
</div>
<?php
?>
<div class="product-list">
    <h2>Товары и цены 6</h3>

    <?php foreach ($goodsRandom as $item) { ?>
        <?php if (($item['price'] > 10000) and ($item['price'] < 15000)){?>
    <div class="product-card">
        <div class="product-name"><?= $item['name']?></div>
        <div class="product-price"><?= $item['price']?></div>
       </div>
    <?php } ?>
<?php } ?>
</div>