<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
update($_GET['m'], $_POST, $id);
?>
<a href="<?php echo baseurl?>index.php?m=<?php echo $_GET['m']?>&a=list">back</a>
