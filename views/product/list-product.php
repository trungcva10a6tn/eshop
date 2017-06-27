<div class="list_user">
    <div class="search">
        <form>
            <input type="text">
            <button>Tìm</button>
        </form>
    </div>
    <div class="header_conten">Quản Lý User</div>
    <div class="content">
        <button class="bnt_add" onclick="location.href='?page=them-san-pham'">Thêm Sản Phẩm</button>
        <table>
            <tr>
                <th><input type="checkbox"></th>
                <th>STT</th>
                <th>Tên Sản Phẩm</th>
                <th>Màn Hình</th>
                <th>Hệ Điều Hành</th>
                <th>CPU</th>
                <th>RAM</th>
                <th>Bộ Nhớ</th>
                <th>Sim</th>
                <th>Pin</th>
                <th>Giá</th>
                <th>Lượt xem</th>
                <th>Nhà sản xuất</th>
                <th>Tác Vụ</th>
            </tr>
            <?php
            foreach ($data as $row){
                ?>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><?= $row["id"] ?></td>
                    <td><?= $row["name_product"] ?></td>
                    <td><?= $row["screen"] ?></td>
                    <td><?= $row["operating_system"] ?></td>
                    <td><?= $row["CPU"] ?></td>
                    <td><?= $row["RAM"] ?></td>
                    <td><?= $row["memory"] ?></td>
                    <td><?= $row["sim"] ?></td>
                    <td><?= $row["pin"] ?></td>
                    <td><?= $row["price"] ?></td>
                    <td><?= $row["view"] ?></td>
                    <td><?= $row["id_produces"] ?></td>
                    <td><a href="?page=sua-thanh-vien&id=<?=$row["id"]?>">Sửa</a> <a href="">Xóa</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>
