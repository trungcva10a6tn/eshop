<div class="list_user">
    <div class="search">
        <form method="post">
            <div class="search-boder">
                <input class="search-input" type="text" name="search" value="<?= isset($_POST["search"])?$_POST["search"]:""?>"/>
                <button class="search-button" type="submit" name="find-search"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </form>
    </div>
    <div class="header_conten">Quản Lý User</div>
    <div class="content">
        <button class="bnt_add" onclick="location.href = '?page=them-thanh-vien'">Thêm Thành Viên</button>
        <table>
            <tr>
                <th><input type="checkbox"></th>
                <th>STT</th>
                <th>Tên Đăng Nhập</th>
                <th>Tên Đầy Đủ</th>
                <th>Địa Chỉ</th>
                <th>Email</th>
                <th>SĐT</th>
                <th>Quyền Hạn</th>
                <th>Tác Vụ</th>
            </tr>
            <?php
            if ($data != "") {
                foreach ($data as $index => $row) {
                    ?>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><?= $index + 1 ?></td>
                        <td><?= $row["user_name"] ?></td>
                        <td><?= $row["full_name"] ?></td>
                        <td><?= $row["address"] ?></td>
                        <td><?= $row["email"] ?></td>
                        <td><?= $row["phone"] ?></td>
                        <td>
                            <?= $row["admin"] == 1 ? "Quản Trị Viên" : "" ?>
                            <?= $row["admin"] == 2 ? "Nhân Viên" : "" ?>
                            <?= $row["admin"] == 3 ? "Khác Hàng" : "" ?>
                        </td>
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
<!--        <button class="bnt_add" onclick="location.href = '?page=them-thanh-vien'">Xóa</button>-->
    </div>
</div>
