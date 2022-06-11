일반 : 10000원 <br>
할인 : 8000원 14~18세, 70세 이상, 복지카드 소지자, 국가유공자증 소지자<br>
특별할인 : 4000원 17시 이후 입장객<br>
무료: 3세 미만<br><hr/>
<?php
    $age = 68;

    $welfate = "no";    //복지카드
    $youkong = "yes";   //국가유공자
    $after = "no";  //17시 이후 입장

    if ($age < 3)
        $fee = "무료";
    elseif ($age <= 13 || $after == "yes")
        $fee = "4000원";
    elseif($age <=18 || $age >= 70||$welfate=="yes"||$youkong=="yes")
        $fee ="8000원";
    else
        $fee="10000원";

    echo "나이: $age 복지카드: $welfate 국가유공자: $youkong 17시 이후 입장: $after <br> 입장료: $fee"
?>