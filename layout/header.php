<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dang nhap</title>
    <link rel="stylesheet" type="text/css" href="../../dantri/seson9/layout/css.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">webquangtoai</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="../seson10/index.php?m=post&a=list">post</a></li>
            <li><a href="../seson10/index.php?m=category&a=list">category</a></li>
            <li><a href="../seson10/index.php?m=user&a=list">user</a></li>
            <li><a href="../seson10/index.php?m=role&a=list">role</a></li>
            <li><a href="../seson10/index.php?m=user_role&a=list">user_role</a></li>
            <li><a href="../seson10/index.php?m=function&a=list">function</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo baseurl?>index.php?m=user&a=add"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="../seson10/index.php?m=auth&a=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <?php
            if(isset($_SESSION['loged']) && $_SESSION ==true):
                ?>
                <li><a href="../seson10/index.php?m=auth&a=logout"><span class="glyphicon glyphicon-log-out"></span> đăng xuất</a></li>
                <li><a href="../seson10/index.php?m=pass&a=login" ><span class="glyphicon glyphicon-wrench"></span>  Đổi Mật khẩu</a></li>
            <?php endif;
            ?>
        </ul>
        
    </div>
</nav>
<div class="container">
        <img class="container" width="100%" src="<?php echo PUBLIC_URL ?>img/banner.jpg">
</div>

