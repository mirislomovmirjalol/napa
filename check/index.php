<?php
$userName = "mirislomovmirjalol";
$password = "1234";
?>
<html>

<body>
    <form method="POST">
        <input type="text" name="userName">
        <input type="password" name="password">
        <button type="submit">
            submit
        </button>
    </form>
    <?php
    if ($userName === $_POST['userName'] && $password === $_POST['password']) {
        echo "hello $userName";
    } else {
        echo "username or password is incorrect";
    }
    ?>
</body>
</html>