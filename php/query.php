<?php

$value1=$_POST["value1"];
$value2=$_POST["value2"];

include 'connet.php';
$sql = "SELECT * FROM  `use` WHERE  `id` =".$value1." AND  `qx` LIKE '".$value2."'";


mysql_query($sql,$connect);
$result = mysql_query($sql);
$row = mysql_fetch_array($result);

if($row>0){
    $list1="入住系统";
    $list2="查询系统";
    $list3="餐饮系统";
    $list4="财务报告";
    $list5="安全管理";
    $list6="后台管理";

    // $qx=utf8_encode($row["qx"]);

switch ($value2) {
    case 1:
        echo '{"error":"0","errortype":"Success","List":[
            {"list":"'.$list1.'"},
            {"list":"'.$list2.'"},
            {"list":"'.$list3.'"},
            {"list":"'.$list4.'"},
            {"list":"'.$list5.'"},
            {"list":"'.$list6.'"}]}';

        break;
                
    default:
        
        break;
            }
    
}



mysql_close($connect);
?>
