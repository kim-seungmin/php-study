<html>
<head>
<meta charset="utf-8">
</head>
<body>
    <?php
        $id = $_POST["id"];        
        $passwd = $_POST["passwd"];

        $email1 = $_POST["email1"];
        $email2 = $_POST["email2"];
    ?>

    아이디: <?= $id?><br>
    비밀번호: <?=$passwd?><br>

    취미: 
    <?php
        $num = count($_POST["hobby"]);

        for($i = 0; $i < $num; $i++){
            echo $_POST["hobby"][$i];
            if($i != $num - 1)
                echo ", ";
        }
    ?><br>

    이메일: <?= $email1?>.@.<?= $email2?> <br>

    <?php
	    $file_dir = "C:\\xampp\\htdocs\\7. formAndPHP\\data\\images\\";

	    $file_path = $file_dir.$_FILES["upload"]["name"];
	    if(move_uploaded_file($_FILES["upload"]["tmp_name"], $file_path)) {
	    	$img_dir = "iamge\\";
	    	$img_path = $img_dir.$_FILES["upload"]["name"];
	    	$size = getimagesize($file_path);
    ?>
	    <ul>
    		<li><img src="<?= $img_path?>" <?= $size[3] ?>></li>
		    <li><?= $_POST["comment"]?></li>
	    </ul>
    <?php
	    }
	    else {
    		echo "파일 업로드 오류가 발생했습니다!!!";
    	}
    ?>
</body>
</html>