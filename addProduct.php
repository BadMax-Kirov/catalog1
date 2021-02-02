<link rel='stylesheet' href='style.css' type="text/css"/>
<?php
    require 'DatabaseShell.php';
    $db = new DatabaseShell('localhost', 'root', 'root', 'catalog');
?>  
    <div class="main_table">
    <form method="POST" action="" class="table">
        <label>Наименование товара</label>
        <input type='text' name = "title"><br>
        <label>Код товара</label>
        <input type='text' name = "product_code"><br> 
        <label>Цена товара</label> 
        <input type='text' name = "price"><br>
        <input type='submit' value="Сохранить данные">
    </form>   
    </div>

 <?php   
    if(isset($_POST['title']) AND isset($_POST['product_code']) AND isset($_POST['price'])){
        echo $title = $_POST['title'];
        echo $product_code = $_POST['product_code'];
        echo $price = $_POST['price'];
        
        newProduct($db, $title, $product_code, $price);
    }
    
    function newProduct($db, $title, $product_code, $price)
    {
        $db->save('products', ['title' => $title, 'product_code' => $product_code, 'price' => $price]);
        header('location: index.php');
    }

