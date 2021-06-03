<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-primary">Đổi mật khẩu</h3>
                <form method="POST" action="../seson10/index.php?m=pass&a=xuly_login" id="formChangePass">
                    <div class="form-group">
                        <label for="swd">Mật khẩu cũ</label>
                        <input type="password" class="form-control" name="old_pass" id="old_pass">
                    </div>
                    <div class="form-group">
                        <label for="user_signin">Mật khẩu mới</label>
                        <input type="password" class="form-control" name="new_pass" id="new_pass">
                    </div>
                    <div class="form-group">
                        <label for="swd">Nhập lại mật khẩu mới</label>
                        <input type="password" class="form-control" name="new_pass2" id="re_new_pass">
                    </div>
                    <a href="index.php" class="btn btn-default">
                        <span class="glyphicon glyphicon-arrow-left"></span> Trở về
                    </a>
                    <button class="btn btn-primary" id="submit_change_pass" type="submit" name="doipass">Thay đổi
                    </button>
                    <br><br>
                    <div class="alert alert-danger hidden"></div>
                </form>
            </div>
        </div>
    </div>

