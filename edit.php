<link rel='stylesheet' href='style.css' type="text/css"/>
<?php
    require 'DatabaseShell.php';
    $db = new DatabaseShell('localhost', 'root', 'root', 'catalog');
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
        $edit = $db->setProductId('products',$id);
        
        foreach ($edit as $value) {
            $title = $value['title'];
            $product_code = $value['product_code'];
            $price = $value['price'];
        }
    
?>  
    <div class="main">
        <form method="POST" action="" class = "input">
            <div class="field">
                <label>Наименование товара</label>
                <input type='text' name = "title" value="<?php echo $title ?>">
            </div><br>
            <div class="field">
                <label>Код товара</label>
                <input type='text' name = "product_code" value="<?php echo $product_code ?>">
            </div><br>
            <div class="field">
                <label>Цена товара</label>
                <input type='text' name = "price" value="<?php echo $price ?>"> 
            </div><br>
        <input type='submit' value="Сохранить данные">
    </form>   
    </div>

<?php   
    }
