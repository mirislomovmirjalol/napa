<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
//DIRECTORY_SEPARATOR - / (linux) \ (windows)
//fayl nomini shakillantirdik
$file = __DIR__ . DIRECTORY_SEPARATOR . 'cars.csv';
//faylni o'qish uchun ochdik va resurs yaratildi
$handle = @fopen($file, 'r');
$array = new DateTime();//true
$array = 1;//true
$array = [];//true
$array = null;//false
$array = 0;//false
$array = "";//false
if ($array) {

}
while ($array) {

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        tr.active {
            background-color: #a4c4c8;
        }
    </style>
</head>
<body>
<?php if ($handle): ?>
    <table class="table table-striped text-left">
        <!--Agar resursdan csvning navbatdagi qatorini o'qib olsa-->
        <?php while ($row = fgetcsv($handle,0,";")): ?>
            <tr>
                <td><?= $row[0] ?></td>
                <td><?= $row[1] ?></td>
                <td><?= $row[2] ?></td>
                <td><?= $row[3] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <?php
    fclose($handle);
    ?>
<?php else: ?>
    <p>Bu nomdagi fayl mavjud emas</p>
<?php endif; ?>
</body>
</html>
