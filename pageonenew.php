<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php include __DIR__.'/models/news.php';

$items = News_getOneNew();

include_once __DIR__.'/views/pageonenewviews.php';
?>
<p>
    <a href="/index.php">На главную</a>
</p>


</body>
</html>
