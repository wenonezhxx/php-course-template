<?php
$numbers = [10, 20, 30, 40, 50];
$sun = 0;
foreach ($numbers as $value) {
    if ($value === true){
        $sun++;
    }
}

return $sun