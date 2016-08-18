<?php
include_once 'database.php';
$id = $_POST['id'];
$fn = $_POST['pn'];
$ln = $_POST['pd'];
$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
 $MySQLiconn->query("UPDATE users SET product_name='$pn[$i]', product_des='$pd[$i]' WHERE id=".$id[$i]);
}
header("Location: index.php");
?>