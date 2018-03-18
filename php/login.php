<?php
 session_start();
$use=$_POST["use"];
$pas=$_POST["pas"];

$connect = mysql_connect("127.0.0.1","root","root");
if(!$connect){ 
    echo'{"error":"0001",errortype}';
}
mysql_select_db("paper",$connect);
$sql = "SELECT * FROM  `use` WHERE  `id` =".$use." AND  `pas` LIKE '".$pas."'";
// echo $sql;

mysql_query($sql,$connect);
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
if($row>0){
    echo '{"error":"0","errortype":"Login Success","id":"'.$use.'","qx":"'.$row["qx"].'"}';
    setcookie("user", '"'.$use.'"', time()+14400);
    setcookie("qx", '"'.$row["qx"].'"', time()+14400);
}


// if(){
//     echo $result;
// }

?>