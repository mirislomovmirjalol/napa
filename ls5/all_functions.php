<?php
function generateRandomArray($count, $min = 0, $max = 100)
{
    $result = [];
    for ($i = 0; $i < $count; $i++) {
        $result[] = rand($min, $max);
    }
    return $result;
}

function makeDiv($count, $result)
{
    for ($i = 0; $i < $count; $i++) {
        ?>
        <div class="container" style="height: <?= $result[$i] ?> ">
            |
        </div>
        <?php
    }
}