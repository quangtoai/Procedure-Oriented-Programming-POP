<?php
if(isset($_POST['doipass'])) {
    $mk = md5($_POST['old_pass']);
    $mk1 = $_POST['new_pass'];
    $mk2 = $_POST['new_pass2'];

    $data=get_all('user',"AND pass='$mk'");

    if (!$data) {
        die('sai mật khẩu cũ');
    } else if ($mk1 != $mk2) {
        echo "mật khẩu mới khác nhau";
        return;
    } else if (strlen($mk1) < 4) {
        echo 'mk quá ngắn';
        return;

    } else {
        $mk1 = md5($mk1);
        $sql = " update user set pass='{$mk1}'";
        $result = mysqli_query($connect, $sql);
        if (!$result) {
            die('câu lệnh sai');
    }else{
        header('location:../seson10/index.php?m=pass&a=logout');
    }
    mysqli_close($connect);
    }
}