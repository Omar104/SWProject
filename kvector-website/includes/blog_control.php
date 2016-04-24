<?php
require_once ("../includes/db.php");
class blog_control  // class to control rendering of blogs
{
    public $array_blogs;
    private $cnt;
    function  __construct($db)                // constructing the blogs and assigning the blogs to the array
    {
        $this->array_blogs = array();
        $this->cnt= $db->count_blogs();
        for($i =0; $i<$this->cnt; $i++)
        {
            array_push($this->array_blogs,new blog($db->get_blog($i)));
        }
    }
    function display_all()             // display each blog with its info .
    {
        $index = 0;
        foreach($this->array_blogs as $bl)
        {

            echo " <h2>{$bl->title}</h2>"
                ."<p class=".'"'."lead".'"'.">by {$bl->admin_name}</p>".
                "<p><span class=".'"'."glyphicon glyphicon-time".'"'."></span> Posted on {$bl->blog_date}</p>
                <hr>".
                "<p>".substr($bl->text,0,ceil(strlen($bl->text)/2))."...</p>".
                "<a class=".'"'."btn btn-primary".'"' ."href=".'"'."blog.php?b={$index}".'"'.">Read More <span class=".'"'."glyphicon glyphicon-chevron-right".'"'."></span></a>
                 <hr>"
            ;
            $index++;
        }

    }
    function  display($index) //display the choosen blog
    {
        echo " <h2>{$this->array_blogs[$index]->title}</h2>"
            ."<p class=".'"'."lead".'"'.">by {$this->array_blogs[$index]->admin_name}</p>".
            "<p><span class=".'"'."glyphicon glyphicon-time".'"'."></span> Posted on {$this->array_blogs[$index]->blog_date}</p>
                <hr>".
            "<p>".$this->array_blogs[$index]->text."...</p>".
                 "<hr>";
    }
}
class blog               // class that contains detials of each blog
{
    public $admin_name;
    public $blog_date;
    public $title;
    public $text;

    function __construct($row)
    {
        $this->admin_name = $row["admin_name"];
        $this->blog_date = $row["blog_date"];
        $this->title = $row["title"];
        $this->text = $row["blog"];
    }
}
$bl = new blog_control($database);
?>