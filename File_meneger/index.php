<?php
include 'f_manager.php';

$file_manager = new f_manager();

$folder = intval(@$_GET['folder']);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
          integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
          crossorigin="anonymous"/>
</head>

<body>

<nav class="navbar justify-content-center navbar-light bg-light">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link text-dark" href="#"><i class="fas fa-file-signature"></i> Rename</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="#"><i class="fas fa-copy"></i> Copy</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="#"><i class="fas fa-arrows-alt"></i> Move</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="#"><i class="fas fa-trash-alt"></i> Remove</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="#"><i class="fas fa-sticky-note"></i> Create file</a>
        </li>
        <li class="nav-item">
            <form method="get">
                <div class="input-group">
                    <label>
                        <input placeholder="Search" class="form-control py-2 border" type="search" value=""
                               id="example-search-input">
                    </label>
                </div>
            </form>
        </li>
    </ul>
</nav>


<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <ul class="list-group">
                <?php if ($folder) {
                    $file_manager->list($folder);
                } else {
                    $file_manager->list();
                }
                ?>
            </ul>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>