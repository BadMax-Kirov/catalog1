<link rel='stylesheet' href='style.css' type="text/css"/>

<div class = "mains">
    <form class = "input" action="" method="POST">
        <label class = "label">����� �������</label>
        <input  name="sum" value="<?php if (isset($_POST['sum'])){ echo $_POST['sum'];} $sum ?>"><br>
        
        <label class = "label">����</label>
        <input  name="srok" value="<?php if (isset($_POST['srok'])){ echo $_POST['srok'];} $srok ?>"><br>
        
        <label class = "label">���������� ������</label>
        <input  name="stavka" value="<?php if (isset($_POST['stavka'])){ echo $_POST['stavka'];} $stavka ?>"><br>
        
        <label class = "label">������� ��� ��������</label>
        <input  name="fio" value="<?php $fio ?>"><br>
        
        <label class = "label">���������� �������</label>
        <input  name="tel" value="<?php $tel ?>"><br>
        
        <input  type="submit" value="��������� ������"><br>
    </form>
</div>