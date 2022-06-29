<?php
    session_start();
    echo "session start<br>";

    $_SESSION["userid"] = "ocella";
    $_SESSION["username"] = "제임스";
    echo '등록완료<br>';
    echo $_SESSION['userid']."<br>".$_SESSION['username'];
?>