<?php
 include_once 'database.php';
?>
<head>
<title>Create,Insert, Update, Delete(CRUD) 
</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script src="jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>
</head>

<body>
<form method="post" name="form">
<table width="50%" align="center" border="0">
<tr>
<td colspan="3">
  <a href="create.php">Add new records</a>
</td>
</tr>
<tr>
<th></th>
<th>product_name</th>
<th>product_des</th>
</tr>
<?php
 $res = $conn->query("SELECT * FROM products");
 $count = $res->num_rows;

 if($count > 0)
 {
  while($row=$res->fetch_array())
  {
   ?>
   <tr>
   <td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['id']; ?>"  /></td>
   <td><?php echo $row['product_des']; ?></td>
   <td><?php echo $row['Action']; ?></td>
   </tr>
   <?php
  } 
 }
 else
 {
  ?>
        <tr>
        <td colspan="3"> No Records Found </td>
        </tr>
        <?php
 }
?>

<?php

if($count > 0)
{
 ?>
 <tr>
    <td colspan="3">
    <label><input type="checkbox" class="select-all" /> Check / Uncheck All</label>
    <label id="actions">
    <span style="word-spacing:normal;"> with selected :</span>
    <span><img src="edit.png" onClick="edit();" alt="edit" />edit</span> 
    <span><img src="delete.png" onClick="delete_rec();" alt="delete" />delete</span>
    </label>
    </td>
 </tr>    
    <?php
}

?>

</table>
</form>
</body>
</html>