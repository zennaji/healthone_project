<?php


?>
    <div class="reviews_container">

        <button class="add_rev_btn" >Add reviews</button>
        <div class="reviews_form invisible">
            <form action="" method="POST">
                <div class="rev_inputs">
                    <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                    <input type="textn" name="name" placeholder="Full name" value="<?php echo $name ?>">
                    <!-- <div class="form-text  text-muted error"> <?php //echo $errors['nameError']  ?></div> -->
                    <textarea type="text" name="description" placeholder="Wat is jouw view ?"  rows="4" value="<?php echo $description ?>"></textarea>
                    <!-- <div class="form-text  text-muted error"> <?php //echo $errors['descriptionError']  ?></div> -->
                    <select id="stars" name="stars" value="<?php echo $stars ?>">
                    <option value="1">1</option> 
                    <option value="2">2</option> 
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    </select>
                </div>
                
                <div class="rev_btns">
                    <button>cancel</button>
                    <button type="submit" name="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
