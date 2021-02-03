<?php
    require 'DatabaseShell.php';

    // ������� ������ ��� ������:
    $db = new DatabaseShell('localhost', 'root', 'root', 'catalog');
    //������� ������
     // �������� ������:
    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        delProduct($db, $id);
    }
    $product = $db->getAll('products');
    setProduct($product);  
   

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
                <td><a href>�������������</a></td>
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



