<?php
require_once ("db.php");

class about
{
    public $info;
    public $t_number;
    public $link;
    public $email;

    function __construct(& $db)
    {
        $tmp = $db->f_about();
        $this->info = $tmp['info'];
        $this->t_number = $tmp['tele_number'];
        $this->email = $tmp['email'];
        $this->link = $tmp['link'];
    }
}

?>