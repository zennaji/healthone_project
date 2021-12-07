<?php 

global $params;

// Controleer od de user een admin is 
if($_SESSION["myrole"] == 'admin' ) {
    if(isset($params[2])){
        switch ($params[2]) {
            case 'dashboard':
                $titleSuffix .= ' | dashboard';
                $prod = getProducts2();
                $categ = getCategories();
                include_once (TEMPLATE_ROOT . "/admin/dashboard.php");
    
                if (isset($_POST['edit'])) {
                        $id =  filter_input(INPUT_POST, 'prodId');
                        $prodName = filter_input(INPUT_POST, 'prodName');
                        $prodImg = filter_input(INPUT_POST, 'prodImg');
                        $prodDescription = filter_input(INPUT_POST, 'prodDescription');
                        
        
                        updateProduct($prodName,$prodImg,$prodDescription,$id);
        
                    }elseif(isset($_POST['delete'])){
                        $id =  filter_input(INPUT_POST, 'prodId');
                        $prodName = filter_input(INPUT_POST, 'prodName');
                        $prodImg = filter_input(INPUT_POST, 'prodImg');
                        $prodDescription = filter_input(INPUT_POST, 'prodDescription');
                        deleteProduct($prodName);
                    }
    
                    
                    if (isset($_POST['addprod'])) {
                                $name =  filter_input(INPUT_POST, 'name');
                                $category = filter_input(INPUT_POST, 'category');
                                $img = filter_input(INPUT_POST, 'img');
                                // $target = "img/".basename($_FILES['img']['name']);
                                // $img = $_FILES['img']['name'];
                                $description = filter_input(INPUT_POST, 'description');
                                addProduct($name,$category,$img,$description);
                             
                
                    }


                   
                break;
          
        }

    }
    

}else{
    header("location:/404");
}


?>