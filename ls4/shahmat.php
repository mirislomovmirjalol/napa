<?php
$a = intval(@$_GET['a']);
$c = intval(@$_GET['c']);
?>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .dis {
            background-color: #051818;
        }

        .active {
            background-color: #a70000;
        }

        .item {
            padding: 5px;
            margin: 10px;
            font-weight: 100;
        }
    </style>
</head>
<body>
<table class="table">
    <tbody>
    <?php
    for ($i = 1; $i <= 10; $i++) { ?>
        <tr>
            <?php
            for ($b = 1; $b <= 10; $b++) { ?>
                <td class="item">
                    <a class="item <?= ($a == $b && $c == $i ? 'active' : 'dis') ?>" href="?a=<?= $c ?> ?b=<?= $i ?>">
                        |||||||||||||||||||||||||||||
                    </a>

                </td>
            <?php } ?>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>