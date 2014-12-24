<?php


$mysql = new SaeMysql();
$content=$_POST["content"];
$sql = "INSERT  INTO `test1` ( `content`) VALUES ('".$content."') ";
$mysql->runSql($sql);
if ($mysql->errno() != 0)
{
    die("Error:" . $mysql->errmsg());
}else{
    echo "finish";
}

$mysql->closeDb();


echo "done";
?>
