<?php
$file = __DIR__ . '/data/menu.json';
$allData = [];
if (file_exists($file)) {
    $allData = json_decode(file_get_contents($file), true);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Title</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div id="content">
        <div class="header">
            <h1>Chilling Cafe</h1>
        </div>
        <div class="banner">
            <img src="img/nicecafe.jpg">
        </div>
        <div class="content">
            <h2>Coffe Menu</h2>

            <table border="0" class="table">
                <thead>
                <tr>
                    <th></th>
                    <th width="15%">Hot</th>
                    <th width="15%">Iced</th>
                    <th width="15%">Blended</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($allData as $item): ?>
                    <tr>
                        <td><?= $item['name'] ?></td>
                        <td>$<?= $item['hot_price'] ?></td>
                        <td>$<?= $item['iced_price'] ?></td>
                        <td>$<?= $item['blended_price'] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

            <!--<h2>Tea Menu</h2>
            <table border="0" class="table">
                <thead>
                <tr>
                    <th></th>
                    <th width="15%">Hot</th>
                    <th width="15%">Iced</th>
                    <th width="15%">Blended</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Pure White Milk</td>
                    <td>$10</td>
                    <td>$15</td>
                    <td>$25</td>
                </tr>
                <tr>
                    <td>Hong Kong Tea</td>
                    <td>$18</td>
                    <td>$25</td>
                    <td>$35</td>
                </tr>
                <tr>
                    <td>Taiwan Tea</td>
                    <td>$10</td>
                    <td>$18</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Bubble Tea</td>
                    <td>$12</td>
                    <td>$15</td>
                    <td>$18</td>
                </tr>
                <tr>
                    <td>Mixed Fruit Tea</td>
                    <td>$8</td>
                    <td>$12</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Original Tea</td>
                    <td>$20</td>
                    <td>$30</td>
                    <td>-</td>
                </tr>
                </tbody>
            </table>
-->
            <h2>Special Items</h2>
            <div class="gallery">
                <div class="item">
                    <div class="img-wrapper">
                        <img src="img/1.jpg">
                    </div>
                    <h4>Soft Deli Cup</h4>
                    <p>$34</p>
                </div>
                <div class="item">
                    <div class="img-wrapper">
                        <img src="img/2.jpg">
                    </div>
                    <h4>Coffer Art</h4>
                    <p>$30</p>
                </div>
                <div class="item">
                    <div class="img-wrapper">
                        <img src="img/3.jpg">
                    </div>
                    <h4>Speciality Tea</h4>
                    <p>$24</p>
                </div>
            </div>
            <div class="clear"></div>
            <hr>
            <h2>About our cafe</h2>
            <div class="text">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ornare lacus eu sem molestie, ac
                    dapibus nisl ultricies. Maecenas vulputate mattis metus, ut fermentum elit blandit auctor. Aliquam
                    vehicula viverra neque ac molestie.
                </p>
                <p>
                    Suspendisse et imperdiet sapien. Vestibulum quam magna,
                    dapibus vitae eros scelerisque, commodo pulvinar sapien. Maecenas finibus lectus sit amet nisl
                    hendrerit hendrerit.
                </p>
            </div>
            <hr>
            <h2>Talk to us</h2>
            <div class="text">
                <p>Reach us via <a href="mailto:coffeshop@gmail.com">Email</a> or follow us via social icons below.
                    Thank you.</p>
            </div>
            <ul class="footer-links">
                <li><a href="#!"><i class="fa fa-paper-plane"></i></a></li>
                <li><a href="#!"><i class="fa fa-paper-plane"></i></a></li>
                <li><a href="#!"><i class="fa fa-paper-plane"></i></a></li>
                <li><a href="#!"><i class="fa fa-paper-plane"></i></a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>