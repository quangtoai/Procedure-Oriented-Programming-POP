<?php
if(!$_SESSION['loged']){
    header('location');
    header('location:http://localhost/dantri/seson10/index.php?m=auth&a=login');
}
$data= execute_sql('select ur.*,u.username as user_id, r.role_name as role_id
        from user_role ur inner join user u on u.id=ur.user_id
                          inner join role r on ur.role_id=r.role_code');
?>
<div class="container">
    <a href="../seson10/index.php?m=user_role&a=detail" class="btn btn-primary">Thêm thông tin</a>
<table class="table table-bordered table-hover">
    <tr>
        <th>user_id</th>
        <th>role_id</th>
        <th>mrl</th>
        <th>cation</th>
    </tr>
    <?php foreach ($data as $item):?>
    <tr>
        <td><a href="../seson10/index.php?m=user_role&a=detail&id=<?php echo $item['id']?>"><?php echo $item['user_id']?></a></td>
        <td><a href="../seson10/index.php?m=function&a=list1&id=<?php echo $item['id']?>"><?php echo $item['role_id']?></a></td>
        <td><?php echo $item['MRL']?></td>
        <td><a href="../seson10/index.php?m=user_role&a=delete&id=<?php echo $item['id']?>">delete</a></td>
    </tr>
    <?php endforeach;?>
</table>
</div>