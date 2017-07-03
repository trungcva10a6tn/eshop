<div class="list_user">
    <div class="search">
        <form>
            <input type="text">
            <button>Tìm</button>
        </form>
    </div>
    <div class="header_conten">Quản Lý Sale</div>
    <div class="content">
        <button class="bnt_add" onclick="location.href = '?page=add-sale'">Thêm Sale</button>
        <table>
            <tr>
                <th><input type="checkbox"></th>
                <th>STT</th>
                <th>Sale Name</th>
                <th>Content</th>
                <th>Type</th>
                <th>Start Day</th>
                <th>Finish Day</th>
                <th>Percent</th>
                <th>Controls</th>
            </tr>
            <?php
            if ($data != "") {
                $i = 0;
                foreach ($data as $key => $value) {
                    $i++;
                    ?>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><?= $i ?></td>
                        <td><?= $value["name_sale"] ?></td>
                        <td><?= $value["content_sale"] ?></td>
                        <td><?= ($value["type"] == 1)?'All':(($value["type"] == 2)?'Category':'Product') ?></td>
                        <td><?= $value["start_day"] ?></td>
                        <td><?= $value["end_day"] ?></td>
                        <td>
                            <?= $value["percentage"].'%'; ?>
                        </td>
                        <td>
                            <a href="?page=edit-sale&id=<?= $value["id"] ?>">Sửa</a>
                            <a href="?page=delete-sale&id=<?= $value["id"] ?>" onclick="confirm('Bạn có muốn xóa không ?')">Xóa</a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </div>
</div>

