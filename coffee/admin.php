<?php
if (count($_POST) > 0) {
    $attributes = [
        'name',
        'type',
        'hot_price',
        'iced_price',
        'blended_price',
    ];

    $data = [];
    foreach ($attributes as $attribute) {
        if (isset($_POST[$attribute]) && trim($_POST[$attribute])) {
            $data[$attribute] = $_POST[$attribute];
        }
    }

    if (count($data) === 5) {
        $allData = [];
        $file = __DIR__ . '/data/menu.json';
        if (file_exists($file)) {
            $allData = json_decode(file_get_contents($file), true);
        }

        $allData[] = $data;
        file_put_contents($file, json_encode($allData, JSON_PRETTY_PRINT));
    }

    header("Location: http://fs.lc/11/admin.php");
    return;
}
?>
<form method="post">
    <p>
        <label for="name">Product Name</label>
        <input name="name" id="name">
    </p>
    <p>
        <label for="type">Menu Type</label>
        <select name="type">
            <option value="tea">Tea Menu</option>
            <option value="coffe">Coffe Menu</option>
        </select>
    </p>
    <p>
        <label for="hot_price">Hot Price</label>
        <input type="number" name="hot_price" id="hot_price">
    </p>
    <p>
        <label for="iced_price">Iced Price</label>
        <input type="number" name="iced_price" id="iced_price">
    </p>
    <p>
        <label for="blended_price">Blended Price</label>
        <input type="number" name="blended_price" id="blended_price">
    </p>
    <p>
        <button type="submit">Save</button>
    </p>
</form>

