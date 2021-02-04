<?php
    require 'DatabaseShell.php';

    // Создаем объект для работы:
    $db = new DatabaseShell('localhost', 'root', 'root', 'catalog');
    
     // Удаление товара:
    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        delProduct($db, $id);
    }
    //Выпадающий список
    switch ($_POST['menu']) {
	case 'up'://По убыванию
		$product = $db->selectPriceDown('products');
                setProduct($product);
	  break;
	case 'down'://По возрастанию
		$product = $db->selectPriceUp('products');
                setProduct($product);
	  break;
	
	default:
		//Получение товаров без фильтра
                $product = $db->getAll('products');
                setProduct($product);  
	  break;
}
       
    function setProduct($data)
    {
        $content = '<table cellspacing="1" border = "1" cellpadding="0">
            <tr>
            <th>Наименование</th>
            <th>Код товара</th>
            <th>Цена</th>
            <th>Редактирование</th>
            <th>Удаление</th>
            </tr>';

        foreach ($data as $value){
            $content .= "<tr>
                <td>{$value['title']}</td>
                <td>{$value['product_code']}</td>
                <td>{$value['price']}</td>
                <td><a href =\"edit.php?id={$value['id']}\">Редактировать</a></td>
                <td><a href =\"?delete={$value['id']}\">Удалить</a></td>
            </tr>";

        }   
        echo $content .='</table>';
    }
    
    function delProduct($db, $id)
    {
        $db->del('products', $id);
    }
?>



