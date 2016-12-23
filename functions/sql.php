<?php

function Sql_connect()
{
    mysql_connect('localhost', 'root', '') or die ('Unable to connect to mysql server: ' . mysql_error());
    mysql_select_db('mvc') or die ('Unable to select mysql database: ' . mysql_error());
    mysql_query("SET NAMES utf8");
}

function Sql_query($sql)
{
    Sql_connect();
    $res = mysql_query($sql);

    $ret = [];
    while (false !== $row = mysql_fetch_assoc($res)) {
        $ret[] = $row;
    }
   // var_dump($ret);
    return $ret;
}
function Sql_exec($sql)
{
    Sql_connect();
    mysql_query($sql);

}