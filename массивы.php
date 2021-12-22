<form id="massive" method="post">
        <input type="text" name="stringNum" placeholder="">
        <input type="submit" name="OneSumbit" value="Отправить массив">
</form>

<?php
    function replaseAt($masStr, $number, $inte, $z){
        $str = "";
        $checkInto = false;
        $checkState = true;
        $lenghtMas = strlen($masStr);
        for($i = 0; $i < $lenghtMas; $i++){
            if($checkState) if($i == $inte) $checkInto = true;
            if(!$checkInto) $str .= $masStr[$i];
            else { $str .= $number[$z];
                $checkState = false;
                $checkInto = false;
            } 
        }
        return $str;
    }

    if(isset($_POST['OneSumbit'])){
        $numberStr = ["zero" ,"one", "two", "three", "four", "five", "six", "seven", "eight", "nine"];
        $numbers = [0,1,2,3,4,5,6,7,8,9];
        $masStr = $_POST['stringNum']; // получение из формы
        $newStr = str_replace($numbers, $numberStr, $masStr);

        echo $newStr;
    }//
?>
