<h1>🧙‍♂️ Подготовка хоббитов к путешествию</h1>
<?php
$allHobbits = ["Фродо", "Бильбо", "Торин", "Мерри", "Пиппин", "Гамми", "Сэмвайс", "Нори", "Балин", "Дарин"];
$partySize = rand(2, 5);
shuffle($allHobbits);
$party = array_slice($allHobbits, 0, $partySize);
$partyNames= implode(", ", $party);
$countParty= count($party);

$transports = ["машина", "карета", "повозка", "нет транспорта"];
$transportCount = count($transports);
$randomIndex = rand(0, $transportCount - 1);
$transport = $transports[$randomIndex];

$allSupplies = ["Мясо", "Рыба", "Яблоки", "Фисташки","Арбуз", "Бутерброд"];
$suppliesCount = rand(2, 6);
shuffle($allSupplies);
$supplies = array_slice($allSupplies, 0, $suppliesCount);

$partyEvents = [
    "{hobbit} решил приготовить суп.",
    "{hobbit} потерял свою одежду и носки.",
    "{hobbit} начал громко кричать и все испугались.",
    "{hobbit} отстал от своих друзей.",
    "{hobbit} поворчал и пошел дальше.",
];

$delayDays= count($supplies);
$partyCount= rand(1, 3);
shuffle($partyEvents);
$events = array_slice($partyEvents, 0, $partyCount);
$eventsCount = count($events);
$delayDays= $delayDays + $eventsCount;

$nazgulDays = 5;
$nazguldelay= $nazgulDays - $delayDays


?>

<div class='block'>
    В поход отправляется <?= $countParty?> хоббитов: <?= $partyNames?><br>
</div>

<div class='block'>
    <?if ($transports === 'нет транспорта') {?>
    К сожаления, транспорта нет. Хоббитам придется идти пешком!<?} else {?>
        Хоббиты нашли транспорт: <?=$transport?>
    <?}?>
</div>

<div class='block'>
    Собрали припасы:<br>
    <?php foreach ($supplies as $supply) {
        echo("- $supply <br>");
    } ?>
</div>

<div class='block'>
    Случилось событие:<br>
    <?php foreach ($events as $supply) {
        echo("- $supply <br>");
    } ?>
</div>

<div class='block'>
    <?if ($nazgulDays > $delayDays ) {?>
    ✨ Хоббиты успели выйти в путь раньше назгулов!
    <?} elseif($nazgulDays === $delayDays) {?>
    ✨ Хоббиты успели от назгулов в самый последний момент
    <?} else {?>
        ⚔️ Назгулы настигли хоббитов! Хоббиты слишком долго собирались и опаздали на опоздали на столько дней: <?=$nazguldelay?>
    <?}?>
</div>

<?echo $delayDays;?>