<?php 
function age_check($age){
    if($age >= 20 && $age <= 40){
        return true;
    }else{
        return $false;
    }
}