<?php
// mysql_connect('localhost', 'root', '') or die ('Unable to connect to mysql server: ' . mysql_error());
// mysql_select_db('mvc') or die ('Unable to select mysql database: ' . mysql_error());


require_once __DIR__.'/../functions/sql.php';

function News_getALL()
{
    $sql = "SELECT * FROM news ORDER BY newsdate DESC";
    return Sql_query($sql);

}

function News_insert($newstitle, $newnews)
{

    $sql = "INSERT INTO news
    (newstitle, newstext)
        VALUES ('$newstitle', '" . $newnews . "')";
    Sql_exec($sql);
}

function News_getOneNew()
{
    $id = $_GET['id'];
   // echo $id;
    $sql = "SELECT newstext FROM news where id=".$id;
    // echo $sql;

    return Sql_query($sql);
}


/*
$sql = "SELECT * FROM news ORDER BY newsdate";
$res = mysql_query($sql);
$massif = [];
while ($row = mysql_fetch_assoc($res)) {
    $massif[] = $row;
}
var_dump($massif); echo '<br>';
foreach ($massif as $value) {
       foreach ($value as $key => $el){
           if ($key == 'newstext') {
               echo $el;
           }
          // echo 'key='.$key;
      // echo 'el='.$el;
       }
       }
*/