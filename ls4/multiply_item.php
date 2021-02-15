<?php
$a = intval(@$_GET['a']);
$b = intval(@$_GET['b']);
if ($a == 0) {
    $a = 2;
}
if ($b == 0) {
    $b = 2;
}
?>
<a href="?a= <?= ($a + 1) ?>&b= <?= $b ?> ">
    <?= str_repeat('A', $a) ?>
</a>
<br>
<br>
<a href="?b= <?= ($b + 1) ?>&a= <?= $a ?> ">
    <?= str_repeat('B', $b) ?>
</a>
<br>
<br>
<br>
<br>

<a href="?a=0&b=0"> reset </a>