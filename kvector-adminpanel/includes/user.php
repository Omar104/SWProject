<?php
class user // class to represent the logged in user
{
    private $first_name;
    private $last_name;
    private $username;
    private $super;
    function __construct($f,$l,$u,$b)
    {
        $this->first_name =$f;
        $this->last_name = $l;
        $this->username = $u;
        $this->super = $b;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getSuper()
    {
        return $this->super;
    }

    public function getUsername()
    {
        return $this->username;
    }
}
?>