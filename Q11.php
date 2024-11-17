<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    if(isset($_POST['bg_color'])){
        $backgroundColor = $_POST["bg_color"];
        setcookie("bgColor", $backgroundColor, time() + (60 * 60 * 24));
    }
    ?>
    <meta charset="UTF-8">
    <title>Background Color</title>
    <style>
        body {
            background-color: <?= $backgroundColor ?>;
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="color" name="bg_color" value = "<?php $backgroundColor ?>">
        <button type="submit">Change Color </button>

    </form>
</body>
</html>
