<?php
    require 'elems/DatabaseShell.php';
    
    $db = new DatabaseShell('localhost', 'root', 'root', 'catalog');
    $product = $db->selectMaxMin('products');
            
    $from = $product[0]["MinCena"];
    $before = $product[0]["MaxCena"];
    
    header('location: index.php');
  