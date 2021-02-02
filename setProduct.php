<?php
    require 'DatabaseShell.php';

    // ������� ������ ��� ������:
    $db = new DatabaseShell('localhost', 'root', 'root', 'catalog');
    //������� ������
    $product = $db->getAll('products');
    setProduct($product);  
    // �������� ������:
    //delProduct($db);

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
                <td><a href>�������</a></td>
            </tr>";

        }   
        echo $content .='</table>';
    }
    
    function delProduct($db)
    {
        $db->del('products', 31);
    }
?>


<?php/*
	$users = $db->getAll('users', [1, 2, 3, 5]);
?>
������� ������ �� �������:

<?php
	$users = $db->getAll('users', 'where id >= 3'); */
?>
