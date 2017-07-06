<div class="add_user">
    <form method="post" action="list-sale.php?page=update-sale">
        <fieldset>
            <legend>Edit Sale</legend>
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <div class="new_input">
                <label>Name: </label>
                <input type="text" name="name_sale" value="<?= $data['name_sale'] ?>" placeholder="Nhập tên sale">
            </div>
            <div class="new_input">
                <label>Content :</label>
                <textarea placeholder="Nội dung sale" name="content"><?= $data['content_sale'] ?></textarea>
            </div>
            <div class="new_input">
                <label>Percent(%): </label>
                <input type="text" name="percent" value="<?= $data['percentage'] ?>">
            </div>
            
            <div class="new_input">
                <label>Start Day: </label>
                <input type="text" name="start-day" value="<?= date('d-m-Y',strtotime($data['start_day'])) ?>">
            </div>
            <div class="new_input">
                <label>Finish Day: </label>
                <input type="text" name="finish-day" value="<?= date('d-m-Y',strtotime($data['end_day'])) ?>">
            </div>
            <div class="new_check">
                <input type="radio" name="type" value="1" <?= $data['type'] == 1?'checked':'' ?>>
                <label>All</label>
                <input type="radio" name="type" value="2" <?= $data['type'] == 2?'checked':'' ?>>
                <label>Category</label>
                <input type="radio" name="type" value="3" <?= $data['type'] == 3?'checked':'' ?>>
                <label>Product</label>
            </div>
            <button type="submit" name="update">Update</button>
        </fieldset>
    </form>
</div>

