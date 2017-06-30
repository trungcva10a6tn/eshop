<div class="list_user">
    <div class="search">
        <form>
            <input type="text">
            <button>Tìm</button>
        </form>
    </div>
    <div class="header_conten">Quản Lý Hãng</div>
    <div class="content">
        <button class="bnt_add" onclick="location.href = '?page=them-hang'">Thêm Hãng</button>
        <table>
            <tr>
                <th><input type="checkbox"></th>
                <th>STT</th>
                <th>Tên Hãng</th>
                <th>Tác Vụ</th>
            </tr>
            <?php
            if ($data != "") {
                foreach ($data as $index => $row) {
                    ?>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><?= $index + 1 ?></td>
                        <td><?= $row["name_produces"] ?></td>
                        <td>
                            <a href="?page=sua-hang&id=<?= $row["id"] ?>">Sửa</a>
                            <a href="?page=xoa-hang&id=<?= $row["id"] ?>">Xóa</a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
        <button class="bnt_add" onclick="location.href = '?page=xoa-hang'">Xóa</button>
    </div>
</div>
