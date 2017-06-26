<div class="list_user">
    <div class="search">
        <form>
            <input type="text">
            <button>Tìm</button>
        </form>
    </div>
    <div class="header_conten">Quản Lý User</div>
    <div class="content">
        <button class="bnt_add" onclick="location.href='?page=them-thanh-vien'">Thêm Thành Viên</button>
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
            foreach ($data as $row){
             ?>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><?= $row["id_user"] ?></td>
                    <td><?= $row["user_name"] ?></td>
                    <td><?= $row["full_name"] ?></td>
                    <td><?= $row["address"] ?></td>
                    <td><?= $row["email"] ?></td>
                    <td><?= $row["phone"] ?></td>
                    <td>
                        <?= $row["admin"] == 1 ? "Quản Trị Viên":""?>
                        <?= $row["admin"] == 2 ? "Nhân Viên":""?>
                        <?= $row["admin"] == 3 ? "Khác Hàng":""?>
                    </td>
                    <td><a href="">Sửa</a> <a href="">Xóa</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>
