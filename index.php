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
            <form action="" method="POST">
            <div style="font-size: 13px;">����������� ��: 
            <select name="menu">
                <option>����, �� �����������</option>
                <option>����, �� ��������</option>
            </select>
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
