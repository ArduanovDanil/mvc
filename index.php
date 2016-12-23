<?php

require __DIR__.'/models/news.php';

$items = News_getALL();

include __DIR__.'/views/index.php';