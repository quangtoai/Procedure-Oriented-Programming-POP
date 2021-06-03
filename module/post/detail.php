<?php
$id= isset($_GET['id']) ? $_GET['id'] : false;
$row=get_one('post',"AND id='{$id}'");

$data=get_all('category');

$data1=get_all('user');
?>

<form method="post" action="../seson10/index.php?m=post&a=update&id=<?php echo $id?>">
    <fieldset>
        <div class="form-group">
            <label for="disabledTextInput">NAME:</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="nhập tên vào đây" name="name" value="<?php echo isset($row['name'])? $row['name']:"";?>">
        </div>
        <div class="form-group">
            <label for="disabledTextInput">CONTEN:</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="nhập conten vào đây" name="conten" value="<?php echo isset($row['conten'])? $row['conten']: "";?>">
        </div>
        <div class="form-group">
            <label for="disabledTextInput">AVATA:</label>
            <input type="file" id="disabledTextInput" class="form-control" name="avata"value="<?php echo isset($row['avata']) ? $row['avata']: "";?>">
        </div>
        <div class="form-group">
            <label for="disabledTextInput">CAT_ID:</label>
            <select name='cat_id' id="disabledTextInput" class="form-control">
                <?php foreach( $data as $item1):
                    $selected=$item1['id']==$row['cat_id'] ? 'selected' : '';
                    ?>
                    <option value="<?php echo $item1['id']?>" <?php echo $selected?>><?php echo isset($item1['name'])? $item1['name']: "";?></option>
                <?php endforeach;?>
            </select>
        <div class="form-group">
            <label for="disabledTextInput">USER_ID:</label>
          <select name="user_id" id="disabledTextInput" class="form-control">
              <?php foreach ($data1 as $item2):
              $selected=$item2['id']==$row['user_id']? 'selected':'';
              ?>
                  <option value="<?php echo $item2['id']?>"<?php echo $selected?>><?php echo isset($item2['username'])? $item2['username']: "";?></option>
              <?php endforeach;?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Lưu lại</button>
    </fieldset>
</form>
