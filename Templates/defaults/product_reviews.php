<?php


?>
    <div class="reviews_container">

        <button class="add_rev_btn" >Add review</button>
        <div class="reviews_form invisible">
            <form action="" method="POST">
                <div class="rev_inputs">
                    <label for="name" id="username">
                        <?= isset($_SESSION['name'])? $_SESSION['name'] : "Please login to write a reviews"?>
                    </label>
                    <!-- <input type="hidden" name="user_id" value="<?php //echo $user_id ?>">
                    <input type="textn" name="name" placeholder="Full name" value="<?php //echo $name ?>"> -->
                    <!-- <div class="form-text  text-muted error"> <?php //echo $errors['nameError']  ?></div> -->
                    <textarea type="text" name="description" placeholder="Wat is jouw view ?"  rows="4" value="<?php echo $description ?>"></textarea>
                    <!-- <div class="form-text  text-muted error"> <?php //echo $errors['descriptionError']  ?></div> -->
                    <select id="stars" name="stars" value="<?php echo $stars ?>">
                    <option value="1"> ⭐</option> 
                    <option value="2"> ⭐⭐</option> 
                    <option value="3"> ⭐⭐⭐</option>
                    <option value="4"> ⭐⭐⭐⭐</option>
                    <option value="5"> ⭐⭐⭐⭐⭐</option>
                    </select>

                    <!-- rating stars -->
                    <!-- <form>
                        <fieldset>
                            <span class="star-cb-group">
                            <input type="radio" id="rating-5" name="rating" value="5" /><label for="rating-5">5</label>
                            <input type="radio" id="rating-4" name="rating" value="4" checked="checked" /><label for="rating-4">4</label>
                            <input type="radio" id="rating-3" name="rating" value="3" /><label for="rating-3">3</label>
                            <input type="radio" id="rating-2" name="rating" value="2" /><label for="rating-2">2</label>
                            <input type="radio" id="rating-1" name="rating" value="1" /><label for="rating-1">1</label>
                            <input type="radio" id="rating-0" name="rating" value="0" class="star-cb-clear" /><label for="rating-0">0</label>
                            </span>
                        </fieldset>
                    </form> -->

                </div>
                
                
                
                <div class="rev_btns">
                    <button>cancel</button>
                    <button type="submit" name="submit">Save</button>
                </div>
            </form>
        </div>
        <button class="see_rev_btn" >See rewiews</button>

        <div class="products-review invisible">
            <h2 class="product-reviews-tit">REWIEWS</h2>

            <?php
                $rev = getReviews($productId);

                foreach ($rev as $data) {
                    echo "<div class='product-review'>";

                    
                    echo "<div class='flex'>  <span class='val'>" . $data->title .  " </span> </div> <br/> ";

                    echo "<div class='flex'>  <span class='stars val'> ".$data->stars." </span> </div> <br/> ";

                    echo "<div class='m-l'> <span class='description val'>" . $data->description . "<span> </div> <br/> ";
                    

                    echo "</div>";
                }
            ?>

        </div>

        


        
    </div>
