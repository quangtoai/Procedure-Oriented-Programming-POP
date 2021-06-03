<?php
$id= isset($_GET['id'])? $_GET['id'] :"";
update('user',$_POST,$id);
?>
<a href="../seson10/index.php?m=user&a=list">back</a>