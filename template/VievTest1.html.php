<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    //TODO: To css framework you have planned use bulma, read more.
    $script_get();
    $css_get();
    ?>

</head>
<body>
<?php
echo "<h2> {$data[1]} </h2>";
$header_get();
$content_get();
$footer_get();


?>

</body>
</html>