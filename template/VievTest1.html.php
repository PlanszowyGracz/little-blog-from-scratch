<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="sass/style.css">
    <style></style>
    <?php

    //TODO: Decide if you still want using bulma, or not; Eventualny find css framework focused only on layout positioning.
    $script_get();
    $css_get();
    ?>
    <style>
        .container{
            background-color: aquamarine;
            border-radius: 5px;
            border: 2px solid black;
            padding:10px;

        }
    </style>

</head>
<body>
<?php
//echo "<h2> {$data[1]} </h2>";
$header_get();
$content_get();
$footer_get();


?>

</body>
</html>