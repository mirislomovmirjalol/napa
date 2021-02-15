<?php
$massive = [];
$r = [1,2,3,4,5,6,7,8,9,10];
$n = 10;
$limit = 10;
$selectedNum = intval(@$_GET['a']);
$star = "*";
?>
<head>
    <meta charset="UTF-8">
    <style>
        .container {
            border: 3px solid #00d6ff;
            display: inline-block;
            margin: 20px;
        }

        .star {
            display: inline-block;
            padding: 5px 10px;
            margin: 5px;
            border: 1px solid #00ffa6;
        }

        .link {
            color: #ff0000;
            display: block;
            padding: 20px;
        }
        .container_star {
            border: 3px solid #b74e00;
            display: inline-block;
        }
    </style>
</head>
<body>
<?php foreach ($r as $number) { ?>
    <div class="container">
        <a class="link" href="?a=<?= $number ?>">
            <?= $number ?>
        </a>
    </div>
<?php } ?>
<br>
<div class="container_star">
<?php
$selectedNum = $selectedNum + 1;
for ($i = 1; $i < $selectedNum; $i++) {
    for ($b = 0;$b < $i;$b++){
        echo "<span class='star'> $star </span>";
    }
    echo "<br>";
}
?>
</div>
</body>
