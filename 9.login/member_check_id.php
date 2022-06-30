<html>
    <body>
        <h3> 아이디</h3>
        <?php
            $id = $_GET["id"];
            if(!$id){
                echo("<li> 입력필요</li>");                
            }
            else{
                $con = mysqli_connect("localhost","root","1234","sample");
                $sql = "select * from member where id = '$id'";
                $result = mysqli_query($con,$sql);
                $num_record = mysqli_num_rows($result);

                if($num_record){
                    echo"<li>중복</li>";
                }else{
                    echo"<li>사용가능</li>";
                }
            }
        ?>
    <hr>
    <button onclick="javascript:self.close()">닫기</button>
    </body>
</html>

        