<div class="add_product">
    <form method="post">
        <fieldset>
            <legend><?= ($_GET['page'] == "sua-san-pham" ?"Sửa sản phẩm ": "Thêm sản phẩm")?></legend>
            <div class="new_input">
                <label>Tên Sản Phẩm: </label>
                <input type="text" name="name" value="<?= isset($data[0]["name_product"])?$data[0]["name_product"]:""?><?=isset($data_erro["name_product"])?$data_erro["name_product"]:""?>">
            </div>
            <div class="new_input">
                <label>Màn Hình :</label>
                <input type="text" name="screen" value="<?= isset($data[0]["screen"])?$data[0]["screen"]:""?><?=isset($data_erro["screen"])?$data_erro["screen"]:""?>">
            </div>
            <div class="new_input">
                <label>Hệ điều hành: </label>
                <input type="text" name="operating_system" value="<?= isset($data[0]["operating_system"])?$data[0]["operating_system"]:""?><?=isset($data_erro["operating_system"])?$data_erro["operating_system"]:""?>">
            </div>
            <div class="new_input">
                <label>CPU </label>
                <input type="text" name="CPU" value="<?= isset($data[0]["CPU"])?$data[0]["CPU"]:""?><?=isset($data_erro["CPU"])?$data_erro["CPU"]:""?>">
            </div>
            <div class="new_input">
                <label>RAM </label>
                <input type="text" name="RAM" value="<?= isset($data[0]["RAM"])?$data[0]["RAM"]:""?><?=isset($data_erro["RAM"])?$data_erro["RAM"]:""?>">
            </div>
            <div class="new_input">
                <label>Bộ Nhớ </label>
                <input type="text" name="memory" value="<?=isset($data[0]["memory"])?$data[0]["memory"]:""?><?= isset($data_erro["memory"])?$data_erro["memory"]:""?>">
            </div>
            <div class="new_input">
                <label>Sim </label>
                <input type="text" name="sim" value="<?=isset($data[0]["sim"])?$data[0]["sim"]:""?><?=isset($data_erro["sim"])?$data_erro["sim"]:""?>">
            </div>
            <div class="new_input">
                <label>Pin </label>
                <input type="text" name="pin" value="<?=isset($data[0]["pin"])?$data[0]["pin"]:""?><?=isset($data_erro["pin"])?$data_erro["pin"]:""?>">
            </div>
            <div class="new_input">
                <label>Giá </label>
                <input type="text" name="price" value="<?=isset($data[0]["price"])?$data[0]["price"]:""?><?=isset($data_erro["price"])?$data_erro["price"]:""?>">
            </div>
            <div class="new_input">
                <label>Lượt Xem </label>
                <input type="text" name="view" value="<?=isset($data[0]["view"])?$data[0]["view"]:""?><?=isset($data_erro["view"])?$data_erro["view"]:""?>">
            </div>
            <div class="new_input">
                <label>Nhà Sản Xuất: </label>
                <select name="id_produces">
                    <?php
                    foreach ($data[1] as $row){
                        ?>
                        <option <?=isset($data[0]["id_produces"])?(($data[0]["id_produces"] == $row["id"])?" selected ":""):""?> value="<?= $row["id"]?>"><?= $row["name_produces"]?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <button type="submit" name="sen_add"><?= $_GET["page"]=="sua-san-pham"?"Cập Nhật":"Thêm"?></button>
        </fieldset>
    </form>
</div>

