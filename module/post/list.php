<?php
if(!$_SESSION['loged']){
    header('location');
    header('location:http://localhost/dantri/seson10/?m=auth&a=login');
}
global $connect;
$data = execute_sql('SELECT p.*, c.name AS cat_id, u.username as user_id
FROM post p INNER JOIN category c ON p.cat_id=c.id
			INNER JOIN user u ON p.user_id=u.id;')
?>
<div class="container">
    <td><a href="../seson10/index.php?m=post&a=detail" class="btn btn-primary"><h5>Thêm dữ liệu</h5></a></td>
    <table class="table table-bordered table-hover">
        <tr class="bg-danger text-white">
            <th>name</th>
            <th>conten</th>
            <th>avata</th>
            <th>cat_id</th>
            <th>user_id</th>
            <th>action</th>
        <tr>
            <?php foreach ($data as $item):?>
        <tr>
            <td><a href="../seson10/index.php?m=post&a=detail&id=<?php echo $item['id']?>"><?php echo  $item['name']?></a></td>
            <td><?php echo  $item['conten']?></td>
            <td><?php echo  $item['avata']?></td>
            <td><?php echo  $item['cat_id']?></td>
            <td><a href="../seson10/index.php?m=post&a=list1&user_id=<?php echo $item['id']?>"><?php echo  $item['user_id']?></a></td>
            <td><a href="../seson10/index.php?m=post&a=delete&id=<?php echo $item['id']?>">delete</a></td>

        <tr>
            <?php endforeach;?>
    </table>
</div>
