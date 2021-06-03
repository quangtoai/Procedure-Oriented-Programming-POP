<?php
if(!$_SESSION['loged']){
    header('location');
    header('location:http://localhost/dantri/seson10/index.php?m=auth&a=login');
}
 $data=get_all('role');
?>
<div class="container">
    <a href="../seson10/index.php?m=role&a=detail" class="btn btn-primary">Thêm thông tin</a>
<table class="table table-bordered table-hover">
    <tr>
        <th>role_id</th>
        <th>role_name</th>
        <th>role_code</th>
        <th>role_level</th>
        <th>cation</th>
    </tr>
    <?php foreach ($data as $item):?>
    <tr>
        <td><a href="../seson10/index.php?m=role&a=detail&id=<?php echo $item['id']?>"><?php echo $item['role_id']?></a></td>
        <td><?php echo $item['role_name']?></td>
        <td><?php echo $item['role_code']?></td>
        <td><?php echo $item['role_level']?></td>
        <td><a href="../seson10/index.php?m=role&a=delete&id=<?php echo $item['id']?>">delete</a></td>
    </tr>
    <?php endforeach;?>
</table>
</div>