<?php
    require 'DatabaseShell.php';

    // Создаем объект для работы:
    $db = new DatabaseShell('localhost', 'root', 'root', 'catalog');
    //Получим товары
    $product = $db->getAll('products');
    setProduct($product);
    //Добавление нового товара
    //newProduct($db);
    
    // Удаление товара:
    //delProduct($db);

    function setProduct ($data)
    {
        $content = '<table>
            <tr>
            <th>Наименование</th>
            <th>Код товара</th>
            <th>Цена</th>
            <th>edit</th>
            <th>delete</th>
            </tr>';

        foreach ($data as $value){
            $content .= "<tr>
                <td>{$value['title']}</td>
                <td>{$value['product_code']}</td>
                <td>{$value['price']}</td>
                <td><a href>edit</a></td>
                <td><a href>delete</a></td>
            </tr>";

        }   
        echo $content .='</table>';
    }
    
    function newProduct($db)
    {
        $db->save('products', ['title' => $title, 'product_code' => $product_code, 'price' => $price]);
    }
    
    function delProduct($db)
    {
        $db->del('products', 31);
    }
?>


<?php/*
	$users = $db->getAll('users', [1, 2, 3, 5]);
?>
Получим юзеров по условию:

<?php
	$users = $db->getAll('users', 'where id >= 3'); */
?>
