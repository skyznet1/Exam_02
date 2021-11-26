<?php

function rev_epur_str($str="")
{
    if (gettype($str) != "string" || func_num_args() == 0){
        return FALSE;
    }

    else {
        $tab = explode(" ", $str);
        $rev = array_reverse($tab);
        $imp = implode(" ", $rev);
        $fin = preg_replace('/\s\s+/', ' ', $imp);
        $fin2 = trim($fin);
        return $fin2;
    }

}