<?php
var_dump($_GET);
$id = $_GET['id'];
execute_sql("delete from  ".$_GET['m']."  where id='{$id}'");

?>
<a href="../seson10/index.php?m=<?php echo $_GET['m']?>&a=list">trở lại</a>
