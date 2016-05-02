<?php
require_once ("db.php");

class validation  // class to validate user input
{

    static $errorList = array(); //array of displayed erros


    static function validate_sp($userName, $passWord)   // validate user input
    {
        if(ctype_alnum($userName) == false)         //username doesnt contain special characters
        {
            validation::$errorList[] = "username contains invalid characters(special characters) ";
        }
        if(ctype_alnum($passWord) == false)        //password doesnt contain special characters 
        {
            validation::$errorList[] = "passWord contains invalid characters(special characters) ";
        }
    }

    static function validate_exist_user($userName, $passWord)   // function validate if the username and the password correct or not
    {
        global $database;
        if($database->is_valid_user($userName) == 0)
        {
            validation::$errorList[] = "invalid username";
        }
        else
        {
            if($database->is_valid_password($userName, $passWord) == false)
            {
                validation::$errorList[] = "invalid password";
            }
        }

    }

}

?>