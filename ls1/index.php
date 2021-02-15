<html>
    <body>
        <form method="post">
            <input type="text" name="student">
            <button type="submit">ok</button>
        </form>
        <?php
        $grades = array("jim"=>"a+","pam"=>"c+","oscar"=>"b+",);
        echo $grades[$_POST["student"]]
        ?>
    </body>
</html>