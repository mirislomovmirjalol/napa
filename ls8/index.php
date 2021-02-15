<?php
define("DS", DIRECTORY_SEPARATOR);
define("ONE_MB", 1024 * 1024 * 8);
$limit = 20000 * 1024 * 8;

if (count($_FILES)) {
    if (isset($_FILES['document'])) {
        if ($_FILES['document']['size'] < $limit) {
            $filePath = __DIR__ . DS . 'uploads' . DS . $_FILES['document']['name'];
            if (move_uploaded_file($_FILES['document']['tmp_name'], $filePath)) {
                echo "<p>File uploaded</p>";
            }
        }
    }
}
?>
<form method="post"
      enctype="multipart/form-data">
    <label>
        Choose file: <input type="file" name="document">
    </label>
    <button type="submit">
        Upload
    </button>
</form>
<?php
//foreach (glob("uploads/*.*") as $filename) {
//    echo "$filename" . "<br>";
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</head>
<body>

<table class="table">
    <thead>
    <?php foreach (glob("uploads/*.*") as $filename): ?>
        <tr>
            <th>
                <a href="<?= $filename ?>" download="<?= $filename ?>"><?= $filename ?></a>
            </th>
            <th>
                <?= round(filesize($filename) / 1024) . "KB" ?>
            </th>
        </tr>
    <?php endforeach; ?>
    </thead>

</table>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php foreach (glob("uploads/*.jpg") as $key => $item): ?>
            <div class="carousel-item <?php if ($key == 0) {
                echo "active";
            } ?>">
                <img class="d-block w-100" src="<?= $item ?>" alt="First slide">
            </div>
        <?php endforeach; ?>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


</body>
</html>
