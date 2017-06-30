<div class="add_user">
    <form method="post">
        <fieldset>
            <legend>Xóa Thành Viên</legend>
            <div class="new_input">
                <label>Tên Đăng Nhập: <?= $data["user_name"]?></label>
            </div>
            <div class="new_input">
                <label>Tên Đầy Đủ: <?= $data["full_name"]?></label>
            </div>
            <div class="new_input">
                <label>Email: <?= $data["email"]?></label>
            </div>
            <div class="new_input">
                <label>SĐT: <?= $data["phone"]?></label>
            </div>
            <button type="submit" name="delete">Xóa</button>
        </fieldset>
    </form>
</div>