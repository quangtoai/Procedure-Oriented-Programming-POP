<?php
if(!$_SESSION['loged']){
    header('location');
    header('location:http://localhost/dantri/seson10/?m=auth&a=login');
}
$data=get_all('user');
?>
<div class="container">
    <a href="../seson10/index.php?m=user&a=detail" class="btn btn-primary"><h5>thêm tài khoản</h5></a>
    <table class="table table-bordered table-hover">
        <tr class="bg-danger text-white">
            <th>usename</th>
            <th>pass</th>
            <th>role</th>
            <th>action</th>

        </tr>
        <?php foreach ($data as $item):?>
        <tr>
            <td><a href="../seson10/index.php?m=user&a=detail&id=<?php echo $item['id']?>"><?php echo $item['username']?></a></td>
            <td><?php echo $item['pass']?></td>
            <td><a href="index.php?m=user_role&a=list"><?php echo $item['roleadmin']?></a></td>
            <td><a href="../seson10/index.php?m=user&a=delete&id=<?php echo $item['id']?>">delete</a></td>
        </tr>
        <?php endforeach;?>
    </table>
</div>
