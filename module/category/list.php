<?php
if(!$_SESSION['loged']){
    header('location');
    header ('location:http://localhost/dantri/seson10/?m=auth&a=login');
}
$data=get_all('category');
?>
<div class="container">
    <td><a href="../seson10/index.php?m=category&a=detail" class="btn btn-primary"><h5>Thêm Danh Mục</h5></a></td>
<table class="table table-bordered table-hover">
    <tr class="bg-danger text-white">
        <th>name</th>
        <th>code</th>
        <th>action</th>
    <tr>
    <?php foreach ($data as $item):?>
    <tr>
        <td><a href="../seson10/index.php?m=category&a=detail&id=<?php echo $item['id']?>"><?php echo $item['name']?></a></td>
        <td><?php echo $item['code']?></td>
        <td><a href="../seson10/index.php?m=category&a=delete&id=<?php echo $item['id']?>">delete</a></td>
        <tr>
        <?php endforeach;?>
</table>
</div>