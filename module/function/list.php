<?php
if(!$_SESSION['loged']){
    header('location');
    header('location:http://localhost/dantri/seson10/?m=auth&a=login');
}
$data=get_all('function');
?>
<div class="container">
    <td><a href="../seson10/index.php?m=function&a=detail" class="btn btn-primary"><h5>Thêm dữ liệu</h5></a></td>
    <table class="table table-bordered table-hover">
        <tr class="bg-danger text-white">
            <th>role</th>
            <th>add</th>
            <th>delete</th>
            <th>edit</th>
            <th colspan="2">Action</th>
        <tr>
            <?php foreach ($data as $item):?>
        <tr>
            <th><?php echo $item['role1']?></th>
            <td><?php echo $item['add1']?></td>
            <td><?php echo $item['delete1']?></td>
            <td><?php echo $item['edit']?></td>
            <td><a href="../seson10/index.php?m=function&a=delete&id=<?php echo $item['id']?>">delete</a></td>
            <td><a href="../seson10/index.php?m=function&a=detail&id=<?php echo $item['id']?>">sửa</a></td>

        </tr>
            <?php endforeach;?>
    </table>
</div>
