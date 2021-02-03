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
            <?php include 'elems\header.php';?> 
        </header>
    </div>
    <div class="container">
        <main>
            <p style="font-size: 13px;">Сортировать по: 
            <form action="" method="POST">
            <select name="menu">
                <option>цене, по возрастанию</option>
                <option>цене, по убыванию</option>
            </select>
            </form>
                </p>
            <?php include 'setProduct.php';?>        
            <br><input style="margin-left: 502px" type="submit" value="Добавить новый товар" OnClick="location.href='addProduct.php'">    
        </main>
    </div> 
    </div>
    <div class="container">
        <footer>
            <?php include 'elems\footer.php';?> 
        </footer><br>
        
</body>
</html>
