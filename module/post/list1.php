<?php
if(!$_SESSION['loged']){
    header('location');
    header('location:http://localhost/dantri/seson10/?m=auth&a=login');
}
$connect=mysqli_connect('localhost','root','','tin_tuc') or die('không kết nối dc database');
$sql="select p.*, c.name as cat_id, username as user_id
from post p inner join category c on p.cat_id= c.id
            inner join user u on p.user_id= u.id where p.user_id={$_GET['user_id']}";
$result=mysqli_query($connect,$sql);
    if(!$result){
        die('câu lệnh sai');
    }
    $data=[];
    while ($row=mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
        mysqli_free_result($result);
        mysqli_close($connect);
?>
<div class="container">
    <td><a href="../seson10/index.php?m=post&a=add" class="btn btn-primary"><h5>Thêm dữ liệu</h5></a></td>
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
            <td><?php echo  $item['user_id']?></td>
            <td><a href="../seson10/index.php?m=post&a=delete&id=<?php echo $item['id']?>">delete</a></td>

        <tr>
            <?php endforeach;?>
    </table>
</div>