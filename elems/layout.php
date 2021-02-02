<!DOCTYPE html>
<html>
    
    <head>
        <link rel='stylesheet' href='style.css' type="text/css"/>
        <title><?= $title ?></title>
        <meta charset='utf-8'>
    </head>
    <body>
        <div class="container">
          <header>
              <?php include 'elems/header.php'; ?>
          </header>
        </div>
          <div class="container">
          <main  class="main">
              <?php include 'elems/form.php'; ?>
          </main>
          </div>
        <div class="container">
          <footer>
              <?php include 'elems/footer.php'; ?>
          </footer>
      </div>
    </body>
</html>


