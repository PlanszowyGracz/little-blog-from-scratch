<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="sass/style.css"  />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Text+Me+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet">
    <?php


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
<div class="container-main">
<?php
//echo "<h2> {$data[1]} </h2>";
$header_get();
$content_get();
$footer_get();


?>
</div>

</body>
</html>