<?php
if(!$_SESSION['loged']){
    header('location');
    header('location:http://localhost/dantri/seson10/?m=auth&a=login');
}
$connect=mysqli_connect('localhost','root','','tin_tuc') or die('khong th k noi');
$sql="SELECT f.*
FROM function f INNER JOIN user_role u ON u.role_id =f.id where f.id ={$_GET['id']}";

$result=mysqli_query($connect,$sql);
if(!$result){
    die('cau lenh sai');
}
$data=[];
while ($row=mysqli_fetch_assoc($result)){
    $data[]=$row;
}
mysqli_free_result($result);
mysqli_close($connect);
?>
<div class="container">
    <td><a href="../seson10/index.php?m=function&a=add" class="btn btn-primary"><h5>Thêm dữ liệu</h5></a></td>
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

