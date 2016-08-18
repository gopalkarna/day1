<?php

 include_once 'database.php';

 if(isset($_POST['chk'])=="")
 {
  ?>
        <script>
  alert('At least one checkbox Must be Selected !!!');
  window.location.href='index.php';
  </script>
        <?php
 }
 $chk = $_POST['chk'];
 $chkcount = count($chk);
 
?>
<form method="post" action="update.php">
<link rel="stylesheet" href="style.css" type="text/css" />
<table width="50%" align="center" border="0">
<tr>
<th>product Name</th>
<th>product des</th>
</tr>
<?php
for($i=0; $i<$chkcount; $i++)
{
 $id = $chk[$i];   
 $res=$MySQLiconn->query("SELECT * FROM users WHERE id=".$id);
 while($row=$res->fetch_array())
 {
  ?>
  <tr>
  <td>
     <input type="hidden" name="id[]" value="<?php echo $row['id'];?>" />
  <input type="text" name="pn[]" value="<?php echo $row['product_name'];?>" />
        </td>
        <td>
  <input type="text" name="pd[]" value="<?php echo $row['product_des'];?>" />
  </td>
  </tr>
  <?php 
 }   
}
?>
<tr>
<td colspan="2">
<button type="submit" name="savemul">Update all</button>&nbsp;
<a href="index.php">cancel</a>
</td>
</tr>
</table>
</form>