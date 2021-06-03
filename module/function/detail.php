<?php
$id= isset($_GET['id'])? $_GET['id'] : false;
$row=get_one('function',"AND id='{$id}'");

?>
<form method="post" action="../seson10/index.php?m=function&a=update&id=<?php echo $id?>">
    <fieldset>
        <div class="form-group">
            <label for="disabledTextInput">role:</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="nhập vào đây" name="role1" value="<?php echo isset($row['role1'])? $row['role1'] : "";?>">
        </div>
        <div class="form-group">
            <label for="disabledTextInput">add:</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="nhập conten vào đây" name="add1" value="<?php echo isset($row['add1'])? $row['add1'] : "";?>">
        </div>
        <div class="form-group">
            <label for="disabledTextInput">delete:</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="nhập conten vào đây" name="delete1" value=<?php echo isset($row['delete1'])? $row['delete1']: "";?>>
        </div>
        <div class="form-group">
            <label for="disabledTextInput">edit:</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="nhập conten vào đây" name="edit" value="<?php echo isset($row['edit'])? $row['edit']: "";?>">
        </div>
        <button type="submit" class="btn btn-primary">Lưu lại</button>
    </fieldset>
</form>
