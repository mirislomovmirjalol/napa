<?php
$connection = new mysqli('localhost', 'root', 'mirjalol','ls10');
if($connection->connect_error) {
    echo "database error";
}else {
    echo "mysql connected successfully";
}
