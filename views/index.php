<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
// var_dump($items);
foreach ($items as $value) {
    foreach ($value as $key => $el) {
        if ($key == 'id') { ?>
            <a href="/views/add.php"><?php $a = $el;  // echo $a; ?> </a><br>
        <?php }
        if ($key == 'newsdate') { ?>
            <a href="/pageonenew.php?id=<?php echo $a; ?>"><?php  echo $el; ?> </a><br>
        <?php }

        if ($key == 'newstitle') {
            echo $el; }?> <br>

          <?php }
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