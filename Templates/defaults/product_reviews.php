<div class="reviews_container">

    <button class="add_rev_btn">Add review</button>
    <div class="reviews_form  ">
        <form action="" method="POST">
            <div class="rev_inputs">
                <label for="name">
                    <?= isset($_SESSION['name']) ? $_SESSION['name'] : "Please login to write a reviews" ?>
                </label>
               
                <textarea type="text" name="description" placeholder="Wat is jouw view ?" rows="4" value="<?php echo $description ?>"></textarea>         
                <select id="stars" name="stars" value="<?php echo $stars ?>">
                    <option value="1"> ⭐</option>
                    <option value="2"> ⭐⭐</option>
                    <option value="3"> ⭐⭐⭐</option>
                    <option value="4"> ⭐⭐⭐⭐</option>
                    <option value="5"> ⭐⭐⭐⭐⭐</option>
                </select>
                <!-- rating stars -->
               
                    <fieldset>
                       
                        <input type="radio" id="rating-1" name="rating" value="1" /><label for="rating-1">1</label>
                        <input type="radio" id="rating-2" name="rating" value="2" /><label for="rating-2">2</label>
                        <input type="radio" id="rating-3" name="rating" value="3" /><label for="rating-3">3</label>
                        <input type="radio" id="rating-4" name="rating" value="4" checked="checked" /><label for="rating-4">4</label>
                        <input type="radio" id="rating-5" name="rating" value="5" /><label for="rating-5">5</label>
                         </span>
                    </fieldset>
                
            </div>


            <div class="rev_btns">
                <button>cancel</button>
                <button type="submit" name="submit">Save</button>
            </div>
        </form>
    </div>
    <button class="see_rev_btn">See rewiews</button>

    <div class="products-review invisible">
        <h2 class="product-reviews-tit">REWIEWS</h2>

        <?php
        $rev = getReviews($productId);
        foreach ($rev as $data): ?>
            <div class='product-review'>
                <div class='flex'> <span class='val'> <?= $data->title ?></span> </div> <br>
                <div class='m-l'> <span class='description val'><?= $data->description ?> <span> </div> <br>
                <div class='flex'> <span class='stars val'><?= $data->stars ?> </span> </div> <br>
                <div div class='flex'> <span class='stars val'><?= $data->date ?> </span> </div> <br>
            </div>
            <?php endforeach; ?>

    </div>
</div>