<?php
$id= isset($_GET['id'])? $_GET['id']: false;
$row=get_one('user_role',"AND id='{$id}'");
?>
<form method="post" action="../seson10/index.php?m=user_role&a=update&id=<?php echo $id?>">
<fieldset>
    <div class="form-group">
        <label for="disabledTextInput">user_id:</label>
        <input type="text" id="disabledTextInput" class="form-control" placeholder="nhập vào đây" name="user_id" value="<?php echo isset($row['user_id'])? $row['user_id']: "";?>">
    </div>
    <div class="form-group">
        <label for="disabledTextInput">role_id:</label>
        <input type="text" id="disabledTextInput" class="form-control" placeholder="nhập name vào đây" name="role_id" value="<?php echo isset($row['role_id'])? $row['role_id'] : "";?>">
    </div>
    <div class="form-group">
        <label for="disabledTextInput">mrl:</label>
        <input type="text" id="disabledTextInput" class="form-control" placeholder="nhập name vào đây" name="mrl" value="<?php echo isset($row['MRL'])? $row['MRL'] :"";?>">
    </div>
        <button type="submit" class="btn btn-primary">Lưu lại</button>
</fieldset>
</form>
