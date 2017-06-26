<div class="add_user">
    <form method="post">
        <fieldset>
            <legend>Thêm Thành Viên</legend>
            <div class="new_input">
                <label>Tên Đăng Nhập: </label>
                <input type="text" name="user_name" title="Tên Đăng Nhập" value="<?= isset($data_erro["user_name"])?$data_erro["user_name"]:""?>">
            </div>
            <div class="new_input">
                <label>Mật Khẩu: </label>
                <input type="text" name="password_1" value="<?= isset($data_erro["password_1"])?$data_erro["password_1"]:""?>">
            </div>
            <div class="new_input">
                <label>Nhập Lại: </label>
                <input type="text" name="password_2" value="<?= isset($data_erro["password_2"])?$data_erro["password_2"]:""?>">
            </div>
            <div class="new_input">
                <label>Tên Đầy Đủ: </label>
                <input type="text" name="full_name" value="<?= isset($data_erro["full_name"])?$data_erro["full_name"]:""?>">
            </div>
            <div class="new_input">
                <label>Địa Chỉ: </label>
                <input type="text" name="address" value="<?= isset($data_erro["address"])?$data_erro["address"]:""?>">
            </div>
            <div class="new_input">
                <label>Email: </label>
                <input type="text" name="email" value="<?= isset($data_erro["email"])?$data_erro["email"]:""?>">
            </div>
            <div class="new_input">
                <label>SĐT: </label>
                <input type="text" name="phone" value="<?= isset($data_erro["phone"])?$data_erro["phone"]:""?>">
            </div>
            <div class="new_input">
                <label>Quyền: </label>
                <select name="admin">
                    <option value="3" selected<?= isset($data_erro["admin"])?$data_erro["admin"]:"selected"?>>Khách Hàng.</option>
                    <option value="2" <?= isset($data_erro["admin"])?$data_erro["admin"]:""?>>Nhân Viên.</option>
                    <option value="1" <?= isset($data_erro["admin"])?$data_erro["admin"]:""?>>Quản Trị Viên.</option>
                </select>
            </div>
            <button type="submit" name="sen_add">Thêm</button>
        </fieldset>
    </form>
</div>

