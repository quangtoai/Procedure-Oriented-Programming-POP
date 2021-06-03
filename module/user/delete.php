<?php
$id=$_GET['id'];
execute_sql('delete from user where id='.$id);
?>
<a href="../seson10/index.php?m=user&a=list">back</a>

