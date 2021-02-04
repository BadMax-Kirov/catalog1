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
            <form class="form" action="" method="POST">
            <div style="font-size: 13px;">
                Сортировать по: 
            <select name="menu">
                <option value="up"> цене, по возрастанию </option>
                <option value="down"> цене, по убыванию </option>
            </select>
                от: 
                <input type="text" name='from' size = "2" value='<?php if(isset($_POST['from'])) echo $_POST['from'];?>'>
                до:  
                <input type="text" name='before' size = "2" value='<?php if(isset($_POST['before'])) echo $_POST['before'];?>'>
                <input type="submit" value=" Выполнить "><br><br>
            </form>
                </div>
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
