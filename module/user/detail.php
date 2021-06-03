<?php
$id= isset($_GET['id'])?$_GET['id'] : false;
$row=get_one('user',"AND id='{$id}'");
?>
<form method="post" action="../seson10/index.php?m=user&a=update&id=<?php echo $id?>">
    <fieldset>
        <div class="form-group">
            <label for="disabledTextInput">Username:</label>
            <input type="email" id="disabledTextInput" class="form-control" placeholder="nhập email vào đây" name="username" value="<?php echo isset($row['username'])? $row['username'] :"";?>">
        </div>
        <div class="form-group">
            <label for="disabledTextInput">Pass:</label>
            <input type="password" id="disabledTextInput" class="form-control" placeholder="nhập pass vào đây" name="pass" value="<?php echo isset($row['pass'])? $row['pass']: "";?>">
        </div>     <div class="form-group">
            <label for="disabledTextInput">Nhập tên:</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="nhập tên vào đây" name="roleadmin" value="<?php echo isset($row['roleadmin'])? $row['roleadmin']: "";?>">
        </div>
        <button type="submit" class="btn btn-primary">Lưu lại</button>
    </fieldset>
</form>

