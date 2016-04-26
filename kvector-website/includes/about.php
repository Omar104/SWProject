<?php
require_once ("db.php");

class about            // class for the about section information
{
    public $info;    // info about the student activity
    public $t_number; // thier telephone number
    public $link;    // link to thier page
    public $email;  // thier email

    function __construct(& $db)   // set the variables
    {
        $tmp = $db->f_about();
        $this->info = $tmp['info'];
        $this->t_number = $tmp['tele_number'];
        $this->email = $tmp['email'];
        $this->link = $tmp['link'];
    }
}

?>