<?php
$id= isset($_GET['id'])? $_GET['id'] : false;
$row=get_one('role',"AND id='{$id}'");
?>
<form method="post" action="../seson10/index.php?m=role&a=update&id=<?php echo $id?>">
    <a href="" class="btn btn-primary">Điền thông tin</a>
    <fieldset>
        <div class="form-group">
            <label for="disabledTextInput">role_id:</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="nhập ID vào đây" name="role_id" value="<?php echo isset($row['role_id'])? $row['role_id'] : "";?>">
        </div>
        <div class="form-group">
            <label for="disabledTextInput">role_name:</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="nhập name vào đây" name="role_name" value="<?php echo isset($row['role_name'])? $row['role_name']: "";?>">
        </div>
        <div class="form-group">
            <label for="disabledTextInput">role_code:</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Nhập rolecode vào đây" name="role_code" value="<?php echo isset($row['role_code'])?$row['role_code']: "";?>">
        </div>
        <div class="form-group">
            <label for="disabledTextInput">role_level:</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Nhập rolecode vào đây" name="role_level" value="<?php echo isset($row['role_level'])? $row['role_level']: "";?>">
        </div>
        <button type="submit" class="btn btn-primary">Lưu lại</button>
    </fieldset>
</form>