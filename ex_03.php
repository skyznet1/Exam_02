<?php
    function resum_join_str($str1, $str2){
    
    if(strlen($str1) >= 14 && strlen($str2) >= 3){

        return (substr($str1, 0,14));
        return (substr($str2, -3));
    }

    elseif (empty($str1) || empty($str2)){
        return false;
    }

    else{
        $str1 = str_pad($str1, 14, ".");
        echo $str1;
        $str2 = str_pad($str2, 3, ".");
        echo ($str2);
    }
}