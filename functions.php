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
	 * Email Validate
	 */
    function email_valid($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Email restriction
     */

     function restrict_mails($email){

            $email_part =  explode('@', email_valid($email));
            $last_mail_part = end($email_part);

            if($last_mail_part == 'uiu.com'){
                return true;
            }else{
                return false;
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