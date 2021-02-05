<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <title>������� �������</title>
        <meta name="description" content="������� �������">
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
                    ����������� ��:  
                    <select name="menu">
                        <option value="up" <?php if(isset($_POST['menu']) AND $_POST['menu'] == 'up')
                                            { ?> selected="true" <?php } ?>> ����, �� ����������� </option>
                        <option style="padding-right: 20px" value="down" <?php if(isset($_POST['menu']) AND $_POST['menu'] == 'down') 
                                            { ?> selected="true" <?php } ?>> ����, �� �������� </option>
                    </select>                
                </label>
                <label style="margin-left: 5px">
                    ��: 
                        <input type="text" name='from' size = "2" value='<?php if(isset($_POST['from'])) echo $_POST['from']; else echo $from;?>'>
                    ��:  
                        <input type="text" name='before' size = "2" value='<?php if(isset($_POST['before'])) echo $_POST['before']; else echo $before;?>'>
                </label>
                    <input style = "margin-left: 30px" type="submit" action="" value=" ����������� "> <button style = "margin-left: 10px" type="submit" formaction="clean.php">��������</button>
                  </form>
           
            </div>
                 

            <?php include 'setProduct.php';?> 
                 
            <br><input style="margin-left: 502px" type="submit" value="�������� ����� �����" OnClick="location.href='addProduct.php'"> 
            
        </main>
    </div> 
    </div>
    <div class="container">
        <footer>
            <?php include 'elems\footer.php';?> 
        </footer><br>
        
</body>
</html>
