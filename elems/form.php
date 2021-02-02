<?php
include 'input.php';
?>
<div class = "block">
<?php    
    function getSum()
    {
    if (isset($_POST['sum']) AND isset($_POST['srok']) AND isset($_POST['stavka']) 
                             AND isset($_POST['fio']) AND isset($_POST['tel'])){
        $S = $_POST['sum'];
        $n = $_POST['srok'];
        $I = $_POST['stavka'];
        
        $i = $I/(100*12);
        $P = $S *($i+$i/(pow($i+1,$n)-1));
        $percent = ($P*$n)-$S;

        $date = strtotime("+$n month", strtotime(date('Y-m-d')));
      
        echo 'Сумма ежемесячных отчислений по кредиту равна: '.round($P,2).' руб.<br>';
        echo 'Сумма выплаченных процентов равна: '.round($percent,2).' руб..<br>';
        echo 'Дата последнего платежа: '.date("Y-m-d", $date);
    }
    }
 getSum();
?>
    </div>


