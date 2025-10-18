<?
$names = [
"Альдар","Берен","Келеборн","Теодред","Эомер","Фарамир","Денетор","Халдир","Глорфиндел","Трандуил",
"Эльдан","Маблон","Брандор","Аранель","Лотарион","Мелькор","Ангмар","Саэрон","Эарендил","Эльрос",
"Аделина","Мириэль","Идунн","Лиана","Элениэль","Лютиэн","Галадриэль","Арвен","Нимродэль","Видария",
"Сильмариэн","Элендис","Альвина","Рианна","Финдуилас","Эстелла","Морвен","Эрисель","Йованна","Мирандиль",
"Боромир","Турин","Финрод","Маэглин","Ородрет","Телион","Ангрон","Дориан","Феанор","Эндар",
"Ангвин","Себальд","Эмильдор","Варгельд","Тарвин","Эларион","Ругвир","Дагор","Мельда","Эофрид",
"Годфри","Гильом","Ричард","Генри","Эдмунд","Родерик","Конрад","Альфред","Эрнст","Гуго",
"Вильгельм","Томас","Оуэн","Филипп","Стефан","Леонард","Роберт","Джон","Артур","Мэтью",
"Агата","Флоренс","Маргарет","Эдит","Сибилла","Катарина","Эльфрида","Изольда","Беатриса","Розалинда",
"Сесиль","Джулиана","Матильда","Элеонора","Клементина","Фелиция","Валентина","Амелия","Гертруда","Хелена"
];
$genders = ['мужчина', 'женщина'];
$villagers = [];
$villagersCount = 100;
for ($i = 0; $i < $villagersCount; $i++) {
    $villagers[] = [
        "name" => $names[array_rand($names)] . " " . ($i + 1),
        "age" => rand(12, 60),
        "gender" => $genders[array_rand($genders)],
        "hp" => rand(10, 15),
        "strength" => rand(3, 5),
        "intelligence" => rand(3, 5),
    ];
}

$conscripts = [];
foreach ($villagers as $villager) {
    if ($villager["gender"] == 'мужчина' && $villager["age"] >= 18) {
        $conscripts[] = $villager;
    }
}
$weapons = [
["name" => "Лук", "bonus" => ["strength" => 2, "intelligence" => 1, "hp" => 0], "class" => "ranged"],
["name" => "Праща", "bonus" => ["strength" => 1, "intelligence" => 0, "hp" => 0], "class" => "ranged"],
["name" => "Меч", "bonus" => ["strength" => 3, "intelligence" => 0, "hp" => 0], "class" => "melee"],
["name" => "Копье", "bonus" => ["strength" => 2, "intelligence" => 0, "hp" => 1], "class" => "melee"],
["name" => "Щит", "bonus" => ["strength" => 0, "intelligence" => 0, "hp" => 3], "class" => "melee"],
["name" => "Силки и ловушки", "bonus" => ["strength" => 0, "intelligence" => 5, "hp" => 0], "class" => "scout"],
];

$militia = [];
for ($i = 0; $i < count($conscripts); $i++) {
    $soldier = $conscripts[$i];
    $weapon = $weapons[array_rand($weapons)];
    $soldier["weaponName"] = $weapon["name"];
    $soldier["weaponClass"] = $weapon["class"];
    $soldier["hp"] += $weapon ["bonus"]["hp"];
    $soldier["strength"] += $weapon ["bonus"]["strength"];
    $soldier["intelligence"] += $weapon ["bonus"]["intelligence"];
    $militia[] = $soldier;

}

$ourUnits = [
    "ranged" => [],
    "melee" => [],
    "scout" => []
];
foreach ($militia as $soldier) {
    $weaponClass = $soldier["weaponClass"];
    if (isset($ourUnits[$weaponClass])) {
        $ourUnits[$weaponClass][] = $soldier;
    }
}

// Рассчитываем статистику для каждого отряда
$ourStats = [];
foreach ($ourUnits as $type => $unitList) {
    $ourStats[$type] = [
        "count" => count($unitList),
        "hp" => 0,
        "strength" => 0,
        "intelligence" => 0
    ];
    
    foreach ($unitList as $soldier) {
        $ourStats[$type]["hp"] += $soldier["hp"];
        $ourStats[$type]["strength"] += $soldier["strength"];
        $ourStats[$type]["intelligence"] += $soldier["intelligence"];
    }
}

$ourCommanders = ["ranged" => null, "melee" => null, "scout" => null];
foreach ($ourUnits as $type => $unitList) {
    if (empty($unitList)) continue;
    $maxInt = -1;
    $commanderName = null;
    foreach ($unitList as $soldier) {
        if ($soldier["intelligence"] > $maxInt) {
            $maxInt = $soldier["intelligence"];
            $commander = $soldier["name"];
        }
    }
    
    $ourCommanders[$type] = $commander;
}
    for ($i = 0; $i < count($unitList); $i++) {
        if ($unitList[$i]["intelligence"] > $maxInt) {
            $maxInt = $unitList[$i]["intelligence"];
            $commanderName = $unitList[$i]["name"];
        }
    }
    $ourCommanders[$type] = $commanderName;

?>


<h2>1) Все жители деревни (<?= count($villagers) ?>)</h2>
<table class="table">
    <tr><th>Имя</th><th>Пол</th><th>Возраст</th><th>HP</th><th>Сила</th><th>Интеллект</th></tr>
    <?php foreach ($villagers as $hobbit) { ?>
        <tr>
            <td><?=$hobbit["name"] ?></td>
            <td><?=$hobbit["gender"] ?></td>
            <td><?=$hobbit["age"] ?></td>
            <td><?=$hobbit["hp"] ?></td>
            <td><?=$hobbit["strength"] ?></td>
            <td><?=$hobbit["intelligence"] ?></td>
    </tr>
    <?php } ?>
    </table>
<h2>1) Призванные мужчины (>18) - ополчение (<?= count($militia) ?>)</h2>
<table class="table">
    <tr><th>Имя</th><th>Пол</th><th>Возраст</th><th>HP</th><th>Сила</th><th>Интеллект</th><th>Оружие</th></tr>
    <?php foreach ($militia as $hobbit) { ?>
        <tr>
            <td><?=$hobbit["name"] ?></td>
            <td><?=$hobbit["gender"] ?></td>
            <td><?=$hobbit["age"] ?></td>
            <td><?=$hobbit["hp"] ?></td>
            <td><?=$hobbit["strength"] ?></td>
            <td><?=$hobbit["intelligence"] ?></td>
            <td><?=$hobbit["weaponName"] ?></td>
    </tr>
    <?php } ?>
    </table>

    <h2>3) Отряды и командиры</h2>
<div class="grid">

<div class="unit">
<h3>🏹 Стрелки (<?= $ourStats["ranged"]["count"] ?? 0 ?>)</h3>
<p><b>Командир:</b> <?= $ourCommanders["ranged"] ?? "нет" ?></p>
<p>❤️ Здоровье: <?= $ourStats["ranged"]["hp"] ?? 0 ?> | ⚔️ Сила: <?= $ourStats["ranged"]["strength"] ?? 0 ?> | 🧠 Интеллект: <?= $ourStats["ranged"]["intelligence"] ?? 0 ?></p>
<?php if (!empty($ourUnits["ranged"])) { ?>
<div class="vlist">
<?php foreach ($ourUnits["ranged"] as $u) { ?>
<div class="smallcard">
<div class="avatar">🏹</div>
<div class="info">
<b><?= $u["name"] ?></b><br>
🪓 Оружие: <?= $u["weaponName"] ?><br>
❤️ <?= $u["hp"] ?> | ⚔️ <?= $u["strength"] ?> | 🧠 <?= $u["intelligence"] ?>
</div>
</div>
<?php } ?>
</div>
<?php } else { ?>
<p><i>Нет бойцов</i></p>
<?php } ?>
</div>



<div class="unit">
<h3>Ближний бой (<?= $ourStats["melee"]["count"] ?? 0 ?>)</h3>
<p><b>Командир:</b> <?= $ourCommanders["melee"] ?? "нет" ?></p>
<p>❤️ Здоровье: <?= $ourStats["melee"]["hp"] ?? 0 ?> | ⚔️ Сила: <?= $ourStats["melee"]["strength"] ?? 0 ?> | 🧠 Интеллект: <?= $ourStats["melee"]["intelligence"] ?? 0 ?></p>
<?php if (!empty($ourUnits["melee"])) { ?>
<div class="vlist">
<?php foreach ($ourUnits["melee"] as $u) { ?>
<div class="smallcard">
<div class="avatar">🏹</div>
<div class="info">
<b><?= $u["name"] ?></b><br>
🪓 Оружие: <?= $u["weaponName"] ?><br>
❤️ <?= $u["hp"] ?> | ⚔️ <?= $u["strength"] ?> | 🧠 <?= $u["intelligence"] ?>
</div>
</div>
<?php } ?>
</div>
<?php } else { ?>
<p><i>Нет бойцов</i></p>
<?php } ?>
</div>



<div class="unit">
<h3>Следопыты скауты (<?= $ourStats["scout"]["count"] ?? 0 ?>)</h3>
<p><b>Командир:</b> <?= $ourCommanders["scout"] ?? "нет" ?></p>
<p>❤️ Здоровье: <?= $ourStats["scout"]["hp"] ?? 0 ?> | ⚔️ Сила: <?= $ourStats["scout"]["strength"] ?? 0 ?> | 🧠 Интеллект: <?= $ourStats["scout"]["intelligence"] ?? 0 ?></p>
<?php if (!empty($ourUnits["scout"])) { ?>
<div class="vlist">
<?php foreach ($ourUnits["scout"] as $u) { ?>
<div class="smallcard">
<div class="avatar">🏹</div>
<div class="info">
<b><?= $u["name"] ?></b><br>
🪓 Оружие: <?= $u["weaponName"] ?><br>
❤️ <?= $u["hp"] ?> | ⚔️ <?= $u["strength"] ?> | 🧠 <?= $u["intelligence"] ?>
</div>
</div>
<?php } ?>
</div>
<?php } else { ?>
<p><i>Нет бойцов</i></p>
<?php } ?>
</div>


    
        
