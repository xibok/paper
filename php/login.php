<?php
$use=$_POST["use"];
$pas=$_POST["pas"];

include 'connet.php';
$sql = "SELECT * FROM  `use` WHERE  `id` =".$use." AND  `pas` LIKE '".$pas."'";
// echo $sql;

mysql_query($sql,$connect);
$result = mysql_query($sql);
$row = mysql_fetch_array($result);

if($row>0){
    $use=utf8_encode($use);
    $qx=utf8_encode($row["qx"]);
    echo '{"error":"0","errortype":"Login Success","id":"'.$use.'","qx":"'.$qx.'"}';
    setcookie("use", $use, time()+14400,"/paper");
    setcookie("qx", $qx, time()+14400,"/paper");

}

mysql_close($connect);


?>