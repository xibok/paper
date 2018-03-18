<?php
header("Content-Type:text/html;charset=UTF-8");
$connect = mysql_connect("127.0.0.1","root","root");
if(!$connect){ 
    echo'{"error":"0001",errortype}';
}
mysql_select_db("paper",$connect);



?>