<link rel='stylesheet' href='style.css' type="text/css"/>
<?php
    require 'DatabaseShell.php';
    $db = new DatabaseShell('localhost', 'root', 'root', 'catalog');
?>  
    <div class="main">
        <form method="POST" action="" class = "input">
            <div class="field">
                <label>Наименование товара</label>
                <input type='text' name = "title" value="">
            </div><br>
            <div class="field">
                <label>Код товара</label>
                <input type='text' name = "product_code" value="">
            </div><br>
            <div class="field">
                <label>Цена товара</label>
                <input type='text' name = "price" value=""> 
            </div><br>
        <input type='submit' value="Сохранить данные">
    </form>   
    </div>

<?php   
    if(isset($_POST['title']) AND isset($_POST['product_code']) AND isset($_POST['price'])){
        if (empty($_POST['title']) AND empty($_POST['product_code']) AND empty($_POST['price'])){
?>
            <script>alert('Ошибка! Введены не все данные!')</script>
<?php
        } else {
            $title = $_POST['title'];
            $product_code = $_POST['product_code'];
            $price = $_POST['price'];
        
            newProduct($db, $title, $product_code, $price);
          }
    }
    function newProduct($db, $title, $product_code, $price)
    {
        $db->save('products', ['title' => $title, 'product_code' => $product_code, 'price' => $price]);
        header('location: index.php');
    }
