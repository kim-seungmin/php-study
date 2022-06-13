<?php
    $num = array(15, 13, 9, 6, 7, 2, 4);
    $numLen = count($num);

    echo "정렬전: ";
    for($i = 0; $i<$numLen; $i++){
        echo "{$num[$i]} ";
    }
    echo "<br>";
    
    for($i = $numLen -2; $i>=0 ;$i--){
        for($j = 0; $j<=$i; $j++){
            if ($num[$j] > $num[$j+1]){
                $tmp = $num[$j];
                $num[$j]=$num[$j+1];
                $num[$j+1]=$tmp;
            }
        }
    }
    echo "소팅후 : ";
    for($i = 0; $i<$numLen; $i++){
        echo "{$num[$i]} ";
    }
    echo "<br>";
?>