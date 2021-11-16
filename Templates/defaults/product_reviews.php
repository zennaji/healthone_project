<?php

$errors = [
    'nameError' => '',
    'descriptionError' => '',
    
];


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "../Modules/Database.php";
    
    if (isset($_POST['submit'])) {

        if (isset($_POST['name'])) {
            $name = strip_tags($_POST['name']);
            if (empty($name) || ctype_space($name)) {  
                $errors['nameError'] = 'Voer je naam in!';   
            }
        }

        if (isset($_POST['description'])) {
            $description = strip_tags($_POST['description']);
            if (empty($description) || ctype_space($description)) {   
                $errors['descriptionError'] = 'Voer je view in!';   
            }
        }

        if (isset($_POST['stars'])) {
            $stars = strip_tags($_POST['stars']);
           
        }

        
        if (isset($_POST['user_id'])) {
            $userId = strip_tags($_POST['user_id']);
            if (empty($userId) || ctype_space($description)) {   
                $errors['descriptionError'] = 'Je moet ingelogd zijn voor een review';   
            }
           
        }

        
        if (isset($_POST['product_id'])) {
            $productId = strip_tags($_POST['product_id']);   
        }

        if (!array_filter($errors)) {
            session_start();
            $q = "INSERT INTO reviews (title,description,stars, user_id, product_id) VALUES ('$name', '$description', '$stars', '$userId', '$productId')";
            $stmt = $pdo->prepare($q);
            $stmt->execute();
            
            $name = $_POST['name'];
            $description = $_POST['description'];
            $stars = $_POST['stars'];
            $userId = $_POST['user_id'];
            $productId = $_POST['product_id'];


            // reviews from database print

            // $stmt = $pdo->prepare("SELECT * FROM reviews");
            // $stmt->execute();
            // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // foreach ($result as &$data) {
            //     echo "<tr>";
            //     echo "<td>" . $data["name"] . "</td>";
            //     echo "<td>" . $data["description"] . "</td>";
            //     echo "<tr>";
            // }
            
        } else {
        
            echo 'query error: ' . mysqli_error($dsn);
        }
    }
}

?>
    <div class="reviews_container">

        <button class="add_rev_btn" >Add reviews</button>
        <div class="reviews_form invisible">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="rev_inputs">
                    <input type="hidden" name="user_id" value="<?php echo $userId['user']->id ?>">
                    <input type="hidden" name="product_id" value="<?php echo $product['id'] ?>">
                    <input type="text" name="name" placeholder="Full name" value="<?php echo $name ?>">
                    <div class="form-text  text-muted error"> <?php echo $errors['nameError']  ?></div>
                    <textarea type="text" name="description" placeholder="Wat is jouw view ?"  rows="4" value="<?php echo $description ?>"></textarea>
                    <div class="form-text  text-muted error"> <?php echo $errors['descriptionError']  ?></div>
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
