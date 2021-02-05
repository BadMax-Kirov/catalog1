<?php
    class DatabaseShell
    {
        private $link;
        
        public function __construct($host, $user, $password, $database)
        {
            $this->link = mysqli_connect($host, $user, $password, $database);
            mysqli_query($this->link, "SET NAMES 'cp1251'");
        }

        public function save($table, $data)
        {    
            $title = $data['title'];
            $product_code = $data['product_code'];
            $price = $data['price'];

            $query = "INSERT INTO $table SET title = '$title', product_code = '$product_code', price = $price";
            mysqli_query($this->link, $query); 
        }

        public function del($table, $id)
        {
            $query = "DELETE FROM $table WHERE id=$id";
            mysqli_query($this->link,$query);
        }

        public function getAll($table)
        {
            $query = "SELECT * FROM $table";
            $result = mysqli_query($this->link, $query);
            for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

            return $data;
        }

        public function setProductId($table, $id)
        {
           $query = "SELECT * FROM $table WHERE id = '$id'";
           $result = mysqli_query($this->link, $query);
           for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

           return $data;
        }
        
        public function editProduct($table, $data)
        { 
            $id = $data['id'];
            $title = $data['title'];
            $product_code = $data['product_code'];
            $price = $data['price'];
            
            $query = "UPDATE $table SET title = '$title', product_code ='$product_code', "
                   . "price ='$price' WHERE id= '$id'";
            mysqli_query($this->link, $query); 
    }
        
        public function selectPriceUp($table, $from, $before)
        {
           $query = "SELECT * FROM $table WHERE price >= $from AND price <= $before ORDER BY price DESC";
           $result = mysqli_query($this->link, $query);
           for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

           return $data;
        }
        
        public function selectPriceDown($table, $from, $before)
        {
           $query = "SELECT * FROM $table WHERE price >= $from AND price <= $before ORDER BY price";
           $result = mysqli_query($this->link, $query);
           for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

           return $data;
        }
        
        public function selectMaxMin($table)
        {
           $query = "SELECT MAX(price) AS MaxCena, MIN(price) AS MinCena FROM $table";
           $result = mysqli_query($this->link, $query);
           for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

           return $data;
        }
    }