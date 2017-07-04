<div class="add_product">
    <form method="post" action="index.php?page=store-sale">
        <fieldset>
            <legend>Create Sale</legend>
            <div class="new_input">
                <label>Name: </label>
                <input type="text" name="name_sale" value="" placeholder="Nhập tên sale">
            </div>
            <div class="new_input">
                <label>Content :</label>
                <textarea placeholder="Nội dung sale" name="content"></textarea>
            </div>
            <div class="new_input">
                <label>Percent(%): </label>
                <input type="text" name="percent" value="">
            </div>
            
            <div class="new_input">
                <label>Start Day: </label>
                <input type="text" name="start-day" value="">
            </div>
            <div class="new_input">
                <label>Finish Day: </label>
                <input type="text" name="finish-day" value="">
            </div>
            <div>
                <input type="radio" name="type" value="1">
                <label>All</label>
                <input type="radio" name="type" value="2">
                <label>Category</label>
                <input type="radio" name="type" value="3">
                <label>Product</label>
            </div>
            <button type="submit" name="add">Create</button>
        </fieldset>
    </form>
</div>

