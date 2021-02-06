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
            <?php include 'elems\header.php';
            
                  require 'elems/DatabaseShell.php';
                  
                  $db = new DatabaseShell('localhost', 'root', 'root', 'catalog');
                  $product = $db->selectMaxMin('products');
            
                  $from = $product[0]["MinPrice"];
                  $before = $product[0]["MaxPrice"];
            ?> 
        </header>
    </div>
    <div class="container">
        <main>
            <form class="form"  method="POST">
                <div style="font-size: 14px; padding: 3px">    
                    <label>
                        Сортировать по:  
                        <select name="menu">
                            <option value="up" 
                                <?php if(isset($_POST['menu']) AND $_POST['menu'] == 'up')
                                { ?> selected="true" <?php } ?>> цене, по возрастанию 
                            </option>
                            <option style="padding-right: 20px" value="down" 
                                <?php if(isset($_POST['menu']) AND $_POST['menu'] == 'down') 
                                { ?> selected="true" <?php } ?>> цене, по убыванию 
                            </option>
                        </select>                
                    </label>          
                    <label style="margin-left: 5px">
                        от: 
                            <input type="text" name='from' size = "2" 
                                   value='<?php if(isset($_POST['from'])) 
                                       echo $_POST['from']; else echo $from;?>'>
                        до:  
                            <input type="text" name='before' size = "2" 
                                   value='<?php if(isset($_POST['before'])) 
                                       echo $_POST['before']; else echo $before;?>'>
                    </label>
                        <input style = "margin-left: 30px" type="submit" action="" value=" Сортировать "> 
                        <button style = "margin-left: 10px" type="submit" formaction="clean.php">Сбросить</button>
            </form>
                </div>         

            <?php include 'setProduct.php';?><br> 
                 
            <input style="margin-left: 502px" type="submit" 
                   value="Добавить новый товар" OnClick="location.href='addProduct.php'"> 
            
        </main>
    </div> 
    </div>
    <div class="container">
        <footer>
            <?php include 'elems\footer.php';?> 
        </footer>
        
</body>
</html>
