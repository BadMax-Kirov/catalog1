<!doctype html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <title>Каталог товаров</title>
  <meta name="description" content="Каталог товаров">
  <link rel='stylesheet' href='style.css' type="text/css"/>
  
  
</head>

<body>
    <div class="container">
        <header>
            <p>Каталог товаров</p>
        </header>
    </div>
    <div class="container">
        <main>
            <?php include 'setProduct.php';?>        
                <br><input type="submit" value="Добавить новый товар" OnClick="location.href='addProduct.php'">    
        </main>
    </div> 
    </div>
    <div class="container">
        <footer>
            <p>footer</p>
        </footer><br>
        
    
</body>
</html>
