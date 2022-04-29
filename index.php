<?php
require "./config.php";
if(isset($_REQUEST['type'])==TRUE and $_REQUEST['type']=='json'){
    require "./json.php";
}else{
    if($lang=="cn"){
        require './cn.php';
    }elseif($lang=="en"){
        require './en.php';
    }
}
?>
