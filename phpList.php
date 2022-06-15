<?php

// 디렉토리에 있는 파일명 가져오기
    function getFileNames($directory) {      
       	$results = array(); 
    	$handler = opendir($directory); 
    	while ($file = readdir($handler)) { 
    		if ($file != '.' && $file != '..' && $file != '.git' && $file != '.gitignore' && $file != 'applications.html' && $file != 'bitnami.css' 
            && $file != 'dashboard' && $file != 'etc' && $file != 'favicon.ico' && $file != 'img' && $file != 'index.php' && $file != 'webalizer' && $file != 'xampp' && is_dir($file) != '1') {
	    		$results[] = $file; 
		    }
	    } 

    	closedir($handler); 
	    return $results;
    }    

$dirArray = getFileNames("C:/xampp/htdocs");
for($i = 0; $i < count($dirArray); $i++){
    $dir = "C:/xampp/htdocs/{$dirArray[$i]}";    
    $handler2 = opendir($dir); 
    	while ($file = readdir($handler2)) { 
    		if ($file != '.' && $file != '..' && $file != 'xampp' && is_dir($file) != '1') {
                echo "<input type = 'button' onclick=\"window.open('http://localhost/{$dirArray[$i]}/{$file}')\" name ='{$dirArray[$i]}{$file}' value='{$dirArray[$i]}/{$file}'> <br>";
		    }
	    } 
       
    }

?>

