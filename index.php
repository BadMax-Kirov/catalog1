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
            <?php include 'elems\header.php';?> 
        </header>
    </div>
    <div class="container">
        <main>
            <form class="form" action="" method="POST">
            <div style="font-size: 13px;">
                ����������� ��: 
                <select name="menu">
                    <option value="up" <?php if(isset($_POST['menu']) AND $_POST['menu'] == 'up')
                    { ?> selected="true" <?php } ?>> ����, �� ����������� </option>
                    <option value="down" <?php if(isset($_POST['menu']) AND $_POST['menu'] == 'down') 
                    { ?> selected="true" <?php } ?>> ����, �� �������� </option>
                </select>
                ��: 
                    <input type="text" name='from' size = "2" value='<?php if(isset($_POST['from'])) echo $_POST['from'];?>'>
                ��:  
                    <input type="text" name='before' size = "2" value='<?php if(isset($_POST['before'])) echo $_POST['before'];?>'>
                    <input type="submit" value=" ��������� "> <br>
                </form>
            </div>
            <?php include 'setProduct.php';?>        
            <br><input style="margin-left: 502px" type="submit" value="�������� ����� �����" OnClick="location.href='addProduct.php'"> 
            <input type="submit" value=" �������� " OnClick="location.href='clean.php'">
        </main>
    </div> 
    </div>
    <div class="container">
        <footer>
            <?php include 'elems\footer.php';?> 
        </footer><br>
        
</body>
</html>
