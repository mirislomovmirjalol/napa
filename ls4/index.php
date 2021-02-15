<?php
$studentItems = [
    [
        'Qosimov',
        'Yodgor',
        '972470099',
        '972470099',
        '1-Guruh',
    ],
    [
        'Olimboyev',
        'Asadbek',
        '993000858',
        '993000858',
        '1-Guruh',
    ]
];
$data = "Qosimov	Yodgor	972470099	972470099	1-Guruh
Olimboyev	Asadbek	993000858	993000858	1-Guruh
Sattorov	Erkin	939959268	939959268	1-Guruh
Axmatjonov	Kamronbek	990395351	990395351	1-Guruh
Vahobov	Doniyor	977726869	977726869	1-Guruh
Gʻaybullayev	Abduraxmon	901680598	901680598	1-Guruh
Turg‘unboyev	Mirsaid	911758202	911758202	1-Guruh
Tursunov	Sherzod	990449123	990449123	1-Guruh
Isoqov	Doniyor	911353458	911353458	1-Guruh
Mirzamahmudov	Abduvoxid	993271423	993271423	1-Guruh
Abdumo'minov	Ramziddin	909702260	909702260	2-Guruh
Mirislomov	Mirjalol	909268106	909268106	2-Guruh
Jo'rayev	Abdumannon	903356362	903356362	2-Guruh
Ergashboyev	Habibullo	946818555	946818555	2-Guruh
Maqsudjonov	Temurbek	974577080	974577080	2-Guruh
Jabborov	Jasur	944454300	944454300	2-Guruh
Madumarov	Rahimjon	945617619	945617619	2-Guruh
Ergashov	Azizjon	998750593	998750593	2-Guruh
Solihonov	Munis	949390920	949390920	2-Guruh
Nosrillayev	Ziyodulla	944248424	944248424	2-Guruh";
$students = explode("\n", $data);

$items = [];
foreach ($students as $studentData) {
    $items[] = explode("\t", $studentData);
}

$cols = [
    'Familya',
    'Ism',
    'Telefon',
    'Login',
    'Guruh',
];
//sort($cols);
//rsort($cols);

$sortCol = intval(@$_GET['sort']);
$studentIndex = intval(@$_GET['s']);

usort($items, function ($a, $b) use ($sortCol) {
//0
//1
//-1
    if ($a[$sortCol] > $b[$sortCol]) {
        return 1;
    }
    if ($a[$sortCol] == $b[$sortCol]) {
        return 0;
    }
    return -1;
});
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

<table class="table">
    <thead>
    <tr>
        <?php foreach ($cols as $i => $col): ?>
            <th>
                <a href="?sort=<?= $i ?>&s=<?= $studentIndex ?>"><?= $col ?></a>
            </th>
        <?php endforeach; ?>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($items as $i => $item): ?>
        <tr class="<?= ($studentIndex == $i ? 'active' : '') ?>">
            <td>
                <a href="?sort=<?= $sortCol ?>&s=<?= $i ?>">
                    <?= $item[0] ?>
                </a>
            </td>
            <td><?= $item[1] ?></td>
            <td><?= $item[2] ?></td>
            <td><?= $item[3] ?></td>
            <td><?= $item[4] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>