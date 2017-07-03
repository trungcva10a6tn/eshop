<div class="list_user">
    <div class="search">
        <form>
            <input type="text">
            <button>Tìm</button>
        </form>
    </div>
    <div class="header_conten">Quản Lý User</div>
    <div class="content">
        <button class="bnt_add" onclick="location.href = '?page=them-hang'">Thêm Thành Viên</button>
        <table>
            <tr>
                <th><input type="checkbox"></th>
                <th>STT</th>
                <th>Tên Đăng Nhập</th>
            </tr>
            <?php
            if ($data != "") {
                foreach ($data as $index => $row) {
                    ?>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><?= $index + 1 ?></td>
                        <td><?= $row["user_name"] ?></td>
                        <td>
                            <a href="?page=sua-thanh-vien&id=<?= $row["id"] ?>">Sửa</a>
                            <a href="?page=xoa-thanh-vien&id=<?= $row["id"] ?>">Xóa</a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
        <button class="bnt_add" onclick="location.href = '?page=them-thanh-vien'">Xóa</button>
    </div>
</div>
