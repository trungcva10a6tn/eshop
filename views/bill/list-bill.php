<div class="list_user">
    <div class="search">
        <form method="post">
            <div class="search-boder">
                <input class="search-input" type="text" name="search" value="<?= isset($_POST["search"])?$_POST["search"]:""?>"/>
                <button class="search-button" type="submit" name="find-search"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
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
                        <td><?= $row["name_bill"] ?></td>
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
<!--        <button class="bnt_add" onclick="location.href = '?page=xoa-hang'">Xóa</button>-->
    </div>
</div>
