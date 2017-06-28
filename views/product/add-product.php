<div class="add_product">
    <form method="post">
        <fieldset>
            <legend>Thêm Sản Phẩm</legend>
            <div class="new_input">
                <label>Tên Sản Phẩm: </label>
                <input type="text" name="name" value="<?= isset($data["name"])?$data["name"]:""?><?=isset($data_erro["name"])?$data_erro["name"]:""?>">
            </div>
            <div class="new_input">
                <label>Màn Hình :</label>
                <input type="text" name="screen" value="<?= isset($data["screen"])?$data["screen"]:""?><?=isset($data_erro["screen"])?$data_erro["screen"]:""?>">
            </div>
            <div class="new_input">
                <label>Hệ điều hành: </label>
                <input type="text" name="operating_system" value="<?= isset($data["operating_system"])?$data["operating_system"]:""?><?=isset($data_erro["operating_system"])?$data_erro["operating_system"]:""?>">
            </div>
            <div class="new_input">
                <label>CPU </label>
                <input type="text" name="CPU" value="<?= isset($data["CPU"])?$data["CPU"]:""?><?=isset($data_erro["CPU"])?$data_erro["CPU"]:""?>">
            </div>
            <div class="new_input">
                <label>RAM </label>
                <input type="text" name="RAM" value="<?= isset($data["RAM"])?$data["RAM"]:""?><?=isset($data_erro["RAM"])?$data_erro["RAM"]:""?>">
            </div>
            <div class="new_input">
                <label>Bộ Nhớ </label>
                <input type="text" name="memory" value="<?=isset($data["memory"])?$data["memory"]:""?><?= isset($data_erro["memory"])?$data_erro["memory"]:""?>">
            </div>
            <div class="new_input">
                <label>Sim </label>
                <input type="text" name="sim" value="<?=isset($data["sim"])?$data["sim"]:""?><?=isset($data_erro["sim"])?$data_erro["sim"]:""?>">
            </div>
            <div class="new_input">
                <label>Pin </label>
                <input type="text" name="pin" value="<?=isset($data["pin"])?$data["pin"]:""?><?=isset($data_erro["pin"])?$data_erro["pin"]:""?>">
            </div>
            <div class="new_input">
                <label>Giá </label>
                <input type="text" name="price" value="<?=isset($data["price"])?$data["price"]:""?><?=isset($data_erro["price"])?$data_erro["price"]:""?>">
            </div>
            <div class="new_input">
                <label>Lượt Xem </label>
                <input type="text" name="view" value="<?=isset($data["view"])?$data["view"]:""?><?=isset($data_erro["view"])?$data_erro["view"]:""?>">
            </div>
            <div class="new_input">
                <label>Nhà Sản Xuất: </label>
                <select name="id_produces">
                    <?php
                    foreach ($data as $row){
                        ?>
                        <option value="<?= $row["id"]?>"> <?= $row["name_produces"]?></option>
                        <?php
                    }
                    ?>
</select>
</div>
<button type="submit" name="sen_add"><?= $_GET["page"]=="sua-san-pham"?"Cập Nhật":"Thêm"?></button>
</fieldset>
</form>
</div>

