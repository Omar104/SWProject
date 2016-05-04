<?php
require_once ("db.php");

class validation  // class to validate user input
{

    static $errorList = array(); //array of displayed erros


    static function validate_sp($input_strings)   // validate user input
    {
        foreach ($input_strings as $key=> $x) {
            if (ctype_alnum($x) == false)         //username doesnt contain special characters
            {
                validation::$errorList[] = " {$key} invalid characters(special characters) ";
            }
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

    static function is_valid_new_user_name($admin_info)   /// function check if input username is unique and the 2 passwords matches
    {
        global $database;
        if($database->is_valid_user($admin_info['Username']) == 1)
        {
            validation::$errorList[] = "username already exists";
        }
        if($admin_info['Password'] !== $admin_info['Password2'])
        {
            validation::$errorList[] = "password does not match";
        }
    }
    static function match($p1,$p2)
    {
        if($p1 != $p2)
            validation::$errorList[]="new passwords dont match";
    }
    static function is_valid_existing_user_name($admin_info)   /// function check if input username is unique and the 2 passwords matches
    {
        global $database;
        if($database->is_valid_user($admin_info['Username']) == 0)
        {
            validation::$errorList[] = "username does not exist";
        }
        if($admin_info['Password'] !== $database->get_super_admin_pass()['pass'])
        {
            validation::$errorList[] = "password does not match";
        }
    }
    static function is_valid_email($e)      //function checks if email is valid or not
    {
        if (!filter_var($e, FILTER_VALIDATE_EMAIL)) {
            validation::$errorList[] = "invalid E-mail";
        }
    }

    static function is_valid_number($number)    //function checks if phone number is valid or not
    {
        if(!ctype_digit($number)) {
            // $phone is invalid
            validation::$errorList[]="invalid phone number";
        }
    }
    static function is_valid_link($lin)         //function checks if link is valid or not
    {
        if (!filter_var($lin ,FILTER_VALIDATE_URL)) {
            // $URL is invalid
            validation::$errorList[]="invalid link";
        }
    }

}

?>