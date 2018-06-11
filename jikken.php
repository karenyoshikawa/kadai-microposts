<?php
    $fruits = ['リンゴ', 'バナナ', 'オレンジ', 'ぶどう', '桃'];
    $count = count($fruits);         // assign the number of items in the array to $count
    for ($i = 0; $i < $count; $i++) {
        print mt_rand(1,10) . '回目: ' . $fruits[$i] . PHP_EOL;
    }
?>