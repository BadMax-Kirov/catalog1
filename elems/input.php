<link rel='stylesheet' href='style.css' type="text/css"/>

<div class = "mains">
    <form class = "input" action="" method="POST">
        <label class = "label">Сумма кредита</label>
        <input  name="sum" value="<?php if (isset($_POST['sum'])){ echo $_POST['sum'];} $sum ?>"><br>
        
        <label class = "label">Срок</label>
        <input  name="srok" value="<?php if (isset($_POST['srok'])){ echo $_POST['srok'];} $srok ?>"><br>
        
        <label class = "label">Процентная ставка</label>
        <input  name="stavka" value="<?php if (isset($_POST['stavka'])){ echo $_POST['stavka'];} $stavka ?>"><br>
        
        <label class = "label">Фамилия Имя Отчество</label>
        <input  name="fio" value="<?php $fio ?>"><br>
        
        <label class = "label">Контактный телефон</label>
        <input  name="tel" value="<?php $tel ?>"><br>
        
        <input  type="submit" value="Отправить данные"><br>
    </form>
</div>