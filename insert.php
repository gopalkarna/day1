<?php
error_reporting(0);
include_once 'database.php';

if(isset($_POST['save_mul']))
{  
 $total = $_POST['total'];
  
 for($i=1; $i<=$total; $i++)
 {
  $pn = $_POST["pname$i"];
  
  $sql="INSERT INTO products(p) VALUES('".$pn."','".$pd."')";
  $sql = $conn->query($sql);  
 }
 
 if($sql)
 {
  ?>
        <script>
  alert('<?php 
    echo $total." records was inserted "; ?>');
  window.location.href='index.php';
  
  </script>
        <?php
 }
 else
 {
  ?>
        <script>
  alert('error while inserting , TRY AGAIN');
  </script>
        <?php
 }
 
}

?>
<link rel="stylesheet" href="style.css" type="text/css" />
<div class="container">
<?php
if(isset($_POST['btn-gen-form']))
{
 ?>
    <form method="post">
    <input type="hidden" name="total" value="<?php echo $_POST["no_of_rec"]; ?>" />
 <table width="50%" align="center" border="0">
    
    <tr>
    <td colspan="3"><a href="create.php">insert more records...</a></td>
    </tr>
    
    <tr>
    <th>##</th>
    <th>product_name</th>
    <th>product_des</th>
    </tr>
 <?php
 for($i=1; $i<=$_POST["no_of_rec"]; $i++) 
 {
  ?>
        <tr>
        <td><?php echo $i; ?></td>
        <td><input type="text" name="pname<?php echo $i; ?>" placeholder="product name" /></td>
        <td><input type="text" name="pdes<?php echo $i; ?>" placeholder="product des" /></td>
        </tr>
        <?php
 }
 ?>
    <tr>
    <td colspan="3">
    
    <button type="submit" name="save_mul">Insert all Records</button> 

    <a href="index.php" >Back to index</a>
    
    </td>
    </tr>
    </table>
    </form>
 <?php
}
?>
</div>