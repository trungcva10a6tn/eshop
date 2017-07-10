<div class="add_user">
    <form method="post" action="?page=store-sale">
        <fieldset>
            <legend>Create Sale</legend>
            <div class="new_input">
                <label>Name: </label>
                <input type="text" name="name_sale" value="" placeholder="Nhập tên sale">
            </div>
            <div class="new_input">
                <label>Content :</label>
                <textarea placeholder="Nội dung sale" name="content" rows="4"></textarea>
            </div>
            <div class="new_input">
                <label>Percent(%): </label>
                <input type="text" name="percent" value="">
            </div>
            
            <div class="new_input">
                <label>Start Day: </label>
                <input type="date" name="start-day" value="">
            </div>
            <div class="new_input">
                <label>Finish Day: </label>
                <input type="date" name="finish-day" value="">
            </div>
            <div>
                <label><input type="radio" name="type" value="1"/> All </label>
                <label><input type="radio" name="type" value="2"/> Category </label>
                <label><input type="radio" name="type" value="3"/> Product  </label>
            </div>
            <button type="submit" name="add">Thêm</button>
            <button type="button" onclick="location.href='?page=hang'">Thoát</button>
        </fieldset>
    </form>
</div>

