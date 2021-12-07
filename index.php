<form action="" method="post">
    <input type="text" name="item1" placeholder="Введите X">
    <input type="text" name="item2" placeholder="Введите кол-во шагов">
    <input type="submit" name="buttom" value="Отправить">
</form>     

<?php
        $x = 0;
        $i = 0;
        if (isset($_POST['buttom'])) {
            $x = $_POST['item1'];
            $i = $_POST['item2'];
        }

        $x1 = 0;
        $sum = 1;
        for($n = 1; $n <= $i; $n++){
            $x1 = (((-1)**$n) * ($x**(2*$n)))/(factorial(2*$n));
            $sum += $x1;
        }
        echo "Результат работы формулы - ". $sum;

        function factorial($f){
            $fac = 1;
            for($i = 1; $i <= $f; $i++){
                $fac *= $i;
            }
            return $fac;        
        }

?>