<link rel="stylesheet" href="style.css" type="text/css" />
<form method="post" action="add-data.php">

<table width="50%" align="center" border="0">

<tr>
<td>Enter records you want to insert</td>
</tr>

<tr>
<td>
<input type="text" name="no_of_rec" placeholder="how many records you want to enter ? ex : 1 , 2 , 3 , 5" maxlength="2" pattern="[0-9]+" required />
</td>
</tr>

<tr>
<td><button type="submit" name="btn-gen-form">create</button> 
&nbsp;
<a href="index.php">back</a>
</td>
</tr>

</table>

</form>