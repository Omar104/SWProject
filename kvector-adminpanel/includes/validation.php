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

}

?>