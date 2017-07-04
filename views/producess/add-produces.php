<div class="add_user">
    <form method="post">
        <fieldset>
            <legend><?= $_GET["page"]=="sua-hang"?"Cập Nhật Hãng":"Thêm Hãng"?></legend>
            <div class="new_input">
                <label>Tên Đăng Nhập: </label>
                <input type="text" name="name_produces" value="<?= isset($data["name_produces"])?$data["name_produces"]:""?><?=isset($data_erro["name_produces"])?$data_erro["name_produces"]:""?>">
            </div>
            <button type="button" onclick="location.href='?page=sale'">Thoát</button>
            <button type="submit" name="sen_add"><?= $_GET["page"]=="sua-hang"?"Cập Nhật":"Thêm"?></button>
        </fieldset>
    </form>
</div>