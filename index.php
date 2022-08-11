<?php
    @include 'assets.php';
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <h1><?=$title?></h1>
    <?php
        @include './nav.php';
    ?>
    <main></main>
    <footer>
        &copy; kim;
    </footer>
</body>
</html>