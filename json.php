<?php 
require "./config.php";
$file_path = './'.$lang.'.txt';
$line = 0 ;
$file = fopen($file_path , 'r') or die("open file failure!"); 
$file_arr = file($file_path);
if($file){ 
    while(stream_get_line($file,8192,"\n")){ 
      $line++; 
    }
    $get = rand(1,$line);
    $text=$file_arr[$get-1];
    echo json_encode(array("code"=>"200","text"=>$text),  JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
    fclose($file);//关闭文件 
} 
?> 

