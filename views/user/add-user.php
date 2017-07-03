<div class="add_user">
    <form method="post">
        <fieldset>
            <legend><?= ($_GET['page'] == "sua-thanh-vien" ?"Sửa thành viên ": "Thêm thành viên")?></legend>
            <div class="new_input">
                <label>Tên Đăng Nhập: </label>
                <input type="text" name="user_name" value="<?= isset($data["user_name"])?$data["user_name"]:""?><?=isset($data_erro["user_name"])?$data_erro["user_name"]:""?>">
            </div>
            <div class="new_input">
                <label>Mật Khẩu: </label>
                <input type="password" name="password_1" value="<?= isset($data_erro["password_1"])?$data_erro["password_1"]:""?>">
            </div>
            <div class="new_input">
                <label>Nhập Lại: </label>
                <input type="password" name="password_2" value="<?= isset($data_erro["password_2"])?$data_erro["password_2"]:""?>">
            </div>
            <div class="new_input">
                <label>Tên Đầy Đủ: </label>
                <input type="text" name="full_name" value="<?= isset($data["full_name"])?$data["full_name"]:""?><?=isset($data_erro["full_name"])?$data_erro["full_name"]:""?>">
            </div>
            <div class="new_input">
                <label>Địa Chỉ: </label>
                <input type="text" name="address" value="<?= isset($data["address"])?$data["address"]:""?><?=isset($data_erro["address"])?$data_erro["address"]:""?>">
            </div>
            <div class="new_input">
                <label>Email: </label>
                <input type="email" name="email" value="<?=isset($data["email"])?$data["email"]:""?><?= isset($data_erro["email"])?$data_erro["email"]:""?>">
            </div>
            <div class="new_input">
                <label>SĐT: </label>
                <input type="text" name="phone" value="<?=isset($data["phone"])?$data["phone"]:""?><?=isset($data_erro["phone"])?$data_erro["phone"]:""?>">
            </div>
            <div class="new_input">
                <label>Quyền: </label>
                <select name="admin">
                    <option value="3" <?= isset($data["admin"]) ? $data["admin"] == 3 ? "selected" : "" :"selected"?><?= isset($data_erro["admin"]) ? $data_erro["admin"] == 3 ? "selected" : "" :"selected"?>>Khách Hàng.</option>
                    <option value="2" <?= isset($data["admin"]) ? $data["admin"] == 2 ? "selected" : "" : ""?><?= isset($data_erro["admin"]) ? $data_erro["admin"] == 2 ? "selected" : "" : ""?>>Nhân Viên.</option>
                    <option value="1" <?= isset($data["admin"]) ? $data["admin"] == 1 ? "selected" : "" : ""?><?= isset($data_erro["admin"]) ? $data_erro["admin"] == 1 ? "selected" : "" : ""?>>Quản Trị Viên.</option>
                </select>
            </div>
            <button type="submit" name="sen_add"><?= $_GET["page"]=="sua-thanh-vien"?"Cập Nhật":"Thêm"?></button>
        </fieldset>
    </form>
</div>

