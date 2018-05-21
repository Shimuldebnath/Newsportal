<?php
if(!mysql_connect("localhost","root",""))
{
     die('not connected'.mysql_error());
}
if(!mysql_select_db("dbtest"))
{
     die('not connected'.mysql_error());
}
?>