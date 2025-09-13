<?
$name = 'Первушов Вадим Павлович';
$age = 18;
?>
<title><?= $name?></title>
<?for ($age; $age > 0; $age--):?>
    <p> <?= $age?> Крокодилы опасны </p>
<?endfor;?>