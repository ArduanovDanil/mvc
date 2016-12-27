<?php


// require_once __DIR__.'/functions/sql.php';
require_once __DIR__.'/models/news.php';

if (!empty ($_POST['newnews']) & !empty($_POST['newstitle'])) {
    $newstitle = $_POST['newstitle'];
    $newnews = $_POST['newnews'];
    News_insert($newstitle, $newnews);
    header('Location: /index.php');
    die;
}
else {
    //echo 'Нет новостей';
    header('Location: /index.php');
}