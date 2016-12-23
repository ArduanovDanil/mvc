<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
foreach ($items as $value) {
    foreach ($value as $key => $el) {
        if ($key == 'newsdate') {
            echo $el; ?> <br>
        <?php }
        if ($key == 'newstitle') {
            echo $el; ?> <br>
       <?php }
    }
}
?>

<p>
    <a href="/views/add.php">Добавить новость</a>
</p>


<?php /*
foreach ($items as $value) {
    foreach ($value as $key => $el) {
        if ($key == 'newstext') {
            echo $el;
        }
    }
} */
    ?>




</body>
</html>