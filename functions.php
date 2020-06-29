<?php 

/**
 * Age Validation
 */
function age_check($age){
    if($age >= 20 && $age <= 40){
        return true;
    }else{
        return $false;
    }
}

/** 
 * Recover form Old Entry 
 */

 function old_entry($value){
     if(isset($_POST[$value])){
        echo $_POST[$value];
     }
 }