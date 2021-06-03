<?php
$id=isset($_GET['id']) ? $_GET['id'] : false;
$row=get_one('category',"AND id='$id'");
?>
<form method="post" action="../seson10/index.php?m=category&a=update&id=<?php echo $id?>">
    <fieldset>
        <div class="form-group">
            <label for="disabledTextInput">NAME</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="nhập tên vào đây" name="name"
                   value="<?php echo isset($row['name']) ? $row['name'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="disabledTextInput">CODE</label>
            <input type="text" id="disabledTextInput" class="form-control"
                   placeholder="nhập code vào đây" name="code"
                   value="<?php echo isset($row['code']) ? $row['code'] : '' ?>">
        </div>
        <button type="submit" class="btn btn-primary">Lưu lại</button>
    </fieldset>
</form>

