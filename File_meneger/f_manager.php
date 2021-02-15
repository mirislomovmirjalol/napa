<?php

class f_manager
{
    function list($folder = "documents")
    {
        foreach (glob("$folder/*") as $filename): ?>
            <li class="list-group-item">
                <a class="text-dark" href="<?= $filename ?>"><i class="fas fa-file"></i> <?= $filename ?></a>
            </li>
        <?php endforeach;
    }

    function rename($old_name, $new_name)
    {
        rename($new_name, $old_name);
    }

    function copy($location, $copy_location)
    {
        copy($location, $copy_location);
    }

    function move($old_location, $new_location)
    {
        rename($old_location, $new_location);
    }

    function remove($location)
    {
        unlink($location);
    }

    function create_f($text, $f_name)
    {
        $content = $text;
        $file = fopen($f_name, "wb");
        fwrite($file, $content);
        fclose($file);
    }
}