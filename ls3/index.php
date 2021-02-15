<?php
//$massive = [0, 1];
//$i = 2;
//while ($i < 50) {
//    if ($i % 2 == 0) {
//        $massive[$i] = $massive[$i - 1] + $massive[$i - 2];
//    } else {
//        $massive[$i] = $massive[$i - 1] - $massive[$i - 2];
//    }
//    $i++;
//}
//print_r($massive);

#2-masala

//$massive = [4, 4, 2, 2];
//$i = 0;
//$a = 0;
//while ($i < count($massive)) {
//    $a = $a + $massive[$i];
//    $i++;
//}
//$a = $a / count($massive);
//echo $a;

#3-masala

//$massive = [4, 4, 2, 2];
//$i = 0;
//$a = 0;
//$minNumbers = [];
//$maxNumbers = [];
//while ($i < count($massive)) {
//    $a = $a + $massive[$i];
//    $i++;
//}
//$a = $a / count($massive);
//
//$i = 0;
//$b = 0;
//$c = 0;
//while ($i < count($massive)) {
//    if ($a < $massive[$i]) {
//        $minNumbers[$b] = $massive[$i];
//        $b++;
//    } else {
//        $maxNumbers[$c] = $massive[$i];
//        $c++;
//    }
//    $i++;
//}
//print_r($maxNumbers);
//print_r($minNumbers);

#4-masala

//$number = 4;
//$a = [];
//$i = 0;
//while ($i <= 5) {
//    $b = rand(0,100);
//    if ($b % 4 == 0) {
//        if (!in_array($b, $a)) {
//            $a[]=$b;
//            $i++;
//        }
//    }
//}
//print_r($a);

#5-masala

//$a = [];
//$i = 0;
//while ($i <= 10) {
//    $b = rand(0,100);
//    if ($b % 2 == 0) {
//        if (!in_array($b, $a)) {
//            $a[]=$b;
//            $i++;
//        }
//    }
//}
//print_r($a);

#6-masala

//function generateRandomMassive()
//{
//    $i = 0;
//    $massive = [];
//    while ($i <= 10) {
//        $b = rand(0, 20);
//        if ($b % 2 == 0) {
//            if (!in_array($b, $massive)) {
//                $massive[] = $b;
//                $i++;
//            }
//        }
//    }
//    return $massive;
//}
//
//$a = generateRandomMassive();
//$c = generateRandomMassive();
//
//$i = 0;
//$indexes = [];
//while ($i <= 10) {
//    if ($a[$i] == $c[$i]) {
//        $indexes[] = $i;
//    }
//    $i++;
//}
//print_r($a);
//print_r($c);
//print_r($indexes);

$students = [
    [
        'name' => 'Shavkat',
        'point' => '90',
    ],
    [
        'name' => 'Mirjalol',
        'point' => '70',
    ],
    [
        'name' => 'Habibullo',
        'point' => '80',
    ],
    [
        'name' => 'Asadbek',
        'point' => '75',
    ],
    [
        'name' => 'Abdurahmon',
        'point' => '69',
    ],
    [
        'name' => 'Yodgor',
        'point' => '82',
    ],
    [
        'name' => 'Aziz',
        'point' => '79',
    ],
    [
        'name' => 'Ramziddin',
        'point' => '62',
    ],
    [
        'name' => 'Abduvohid',
        'point' => '60',
    ]
];
?>
    <style>
        .highPoint {
            color: #008511;
        }

        .lowPoint {
            color: #a70000;
        }
    </style>
    <table>
        <thead>
        <tr>
            <th>Ismi</th>
            <th>Ballari</th>
        </tr>
        </thead>
        <?php foreach ($students as $student) { ?>
            <tr>
                <td><?= $student['name'] ?></td>
                <td><?= $student['point'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <h1>filterlash</h1>
    <form action="index.php" method="get">
        <input type="number" name="number">
        <input type="submit">
    </form>
<?php
function sortByOrder($a, $b)
{
    return $a['point'] <=> $b['point'];
}

usort($students, 'sortByOrder');
$number = $_GET['number'];
foreach ($students as $student) { ?>
    <?php if ($student['point'] > $number) {
        echo "<p class='highPoint'>" . $student['name'] . " " . $student['point'] . "</p>";
    } else {
        echo "<p class='lowPoint'>" . $student['name'] . " " . $student['point'] . "</p>";
    }
}

?>