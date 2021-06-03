<?php
if(isset($_POST['dangnhap'])) {
    $tk = $_POST['username'];
    $mk = md5($_POST['pass']);

    $connect = mysqli_connect('localhost', 'root', '', 'tin_tuc') or die('không thể kết nối database');
    $sql = "select * from user where username='$tk'and pass='$mk'";
    $result = mysqli_query($connect, $sql);
    if (!$result) {
        echo " câu lệnh sai";
    }
    $data=[];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
}
    if(count($data)>=1){
    $_SESSION['loged'] = true;
    echo "đăng nhập thành công";
    header('location:index.php');
    return;
} else{
    echo 'sai tên đăng nhập hoặc mật khẩu';
    }
?>