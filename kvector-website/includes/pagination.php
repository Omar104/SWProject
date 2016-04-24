<?php
require_once ("db.php");

class pagination  //class for controlling the viewing of the albums
{
    public $no_pages;
    public $current_page;

    function __construct($albums = 0) // set current active page of  album and set number of overall pages
    {
        $this->current_page = 1;
        $this->no_pages = ceil($albums/3);
    }

    private function  pre()
    {
        if($this->current_page != 1 && $this->no_pages > 0)
        {
            $tmp = $this->current_page - 1;
            return'<li>
                        <a href="'."index.php?page={$tmp}".'">&laquo;</a>
                    </li>';
        }
        else
            return"";

    }
    private function  p1()
    {
        $tmp = $this->current_page -2;
        if($tmp >= 1 && $this->no_pages > 0)
        {
            return'<li>
                        <a href="'."index.php?page={$tmp}".'">'."{$tmp}".'</a> </li>';
        }
        else
            return "";
    }
    private function  p2()
    {
        $tmp = $this->current_page -1;
        if($tmp >= 1 && $this->no_pages > 0)
        {
            return'<li>
                        <a href="'."index.php?page={$tmp}".'">'."{$tmp}".'</a> </li>';
        }
        else
            return "";
    }
    private function  p3()
    {
        $tmp = $this->current_page;

        if($this->no_pages >0)
            return'<li class = "active">
                        <a href="'."index.php?page={$tmp}".'">'."{$tmp}".'</a> </li>';
        else
            return "";

    }
    private function  p4()
    {
        $tmp = $this->current_page + 1;
        if($tmp <= $this->no_pages)
        {
            return'<li>
                        <a href="'."index.php?page={$tmp}".'">'."{$tmp}".'</a> </li>';
        }
        else
            return "";
    }
    private function  p5()
    {
        $tmp = $this->current_page + 2;
        if($tmp <= $this->no_pages)
        {
            return'<li>
                        <a href="'."index.php?page={$tmp}".'">'."{$tmp}".'</a> </li>';
        }
        else
            return "";
    }
    private function  post()
    {
        if($this->current_page != $this->no_pages && $this->no_pages >0)
        {
            $tmp = $this->current_page + 1;
            return'<li>
                        <a href="'."index.php?page={$tmp}".'">&raquo;</a>
                    </li>';
        }
        else
            return"";

    }
    function create_list() //function to create list of pages available
    {
        echo $this->pre();
        echo  $this->p1();
        echo  $this->p2();
        echo $this->p3();
        echo $this->p4();
        echo $this->p5();
        echo$this->post();
    }
}

$pg = new pagination($database->no_albums());

?>