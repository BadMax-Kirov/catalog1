<?php
    require 'DatabaseShell.php';

    // ������� ������ ��� ������:
    $db = new DatabaseShell('localhost', 'root', 'root', 'catalog');
    
     // �������� ������:
    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        delProduct($db, $id);
    }
    
    switch ($_POST['menu']) {
	case 'up':
		$product = $db->selectPriceDown('products');
                setProduct($product);
	  break;
	case 'down':
		$product = $db->selectPriceUp('products');
                setProduct($product);
	  break;
	
	default:
		//��������� ������� ��� �������
                $product = $db->getAll('products');
                setProduct($product);  
	  break;
}
       
    function setProduct($data)
    {
        $content = '<table cellspacing="1" border = "1" cellpadding="0">
            <tr>
            <th>������������</th>
            <th>��� ������</th>
            <th>����</th>
            <th>��������������</th>
            <th>��������</th>
            </tr>';

        foreach ($data as $value){
            $content .= "<tr>
                <td>{$value['title']}</td>
                <td>{$value['product_code']}</td>
                <td>{$value['price']}</td>
                <td><a href =\"edit.php?id={$value['id']}\">�������������</a></td>
                <td><a href =\"?delete={$value['id']}\">�������</a></td>
            </tr>";

        }   
        echo $content .='</table>';
    }
    
    function delProduct($db, $id)
    {
        $db->del('products', $id);
    }
?>



