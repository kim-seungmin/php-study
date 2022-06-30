<?php
    $id = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];

    $con = mysqli_connect("localhost","root","1234","sample");
    $sql = "insert into member(id, passwd, name)";
    $sql .= "values('$id','$pass','$name')";

    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
        <script>
            location.href = 'register.php';
        </script>
    ";
?>