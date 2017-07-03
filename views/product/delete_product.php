<div class="add_user">
    <form method="post">
        <fieldset>
            <legend>Xóa Sản Phẩm</legend>
            <div class="new_input">
                <label>Tên Sản Phẩm: <?= $data["name_product"]?></label>
            </div>
            <div class="new_input">
                <label>Màn Hình: <?= $data["screen"]?></label>
            </div>
            <div class="new_input">
                <label>Hệ điều hành: <?= $data["operating_system"]?></label>
            </div>
            <div class="new_input">
                <label>CPU: <?= $data["CPU"]?></label>
            </div>
            <div class="new_input">
                <label>RAM: <?= $data["RAM"]?></label>
            </div>
            <div class="new_input">
                <label>Pin: <?= $data["pin"]?></label>
            </div>
            <div class="new_input">
                <label>Giá: <?= $data["price"]?></label>
            </div>
            <button type="submit" name="delete">Xóa</button>
        </fieldset>
    </form>
</div>