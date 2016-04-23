<?php
require_once ("db.php");
class albums
{
    public  $album1;         //first albums name
    public  $desc1;          //description for album1
    private $a1_photo;       //array of photos of the first albums
    public  $album2;         //second albums name
    public  $desc2;         //description fo album2
    private $a2_photo;     //array of photos of the second albums
    public  $album3;         // third albums name
    public  $desc3;
    private $a3_photo;      //array of photos of the third albums
    private $no_albums;      // overall number of albums
    private $offset;
    public $active_page;    // number of current apge
    private $d;

    function  __construct($current_page,$no_al,& $db) // determine the active page and assign the offset and set the 3 albums to be displayed
    {
        $this->d = & $db;                               //setting variables
        $this->active_page = $current_page;
        $this->offset = ($this->active_page - 1) * 3;
        $this->no_albums = $no_al;
        $this->a1_photo = array();
        $this->a2_photo = array();
        $this->a3_photo = array();

        $this->d->album_names($this->offset);

        if($this->no_albums > 0){                              //fetching name of first album to display if it exists
        $this->d->fetch_row();
        $this->album1 = $this->d->fetch_element("name");


    }
        else {
            unset($this->album1);

        }
        if (($this->offset + 1) <= $this->no_albums && $this->no_albums > 0) {  //fetching name of second album to display if it exists
        $db->fetch_row();
        $this->album2 = $db->fetch_element("name");

    }
        else {
            unset($this->album2);

        }

        if(($this->offset +2) <= $this->no_albums && $this->no_albums > 0) {   //fetching name of third album to display if it exists
        $db->fetch_row();
        $this->album3 =$db->fetch_element("name");

        }
        else {
            unset($this->album3);

        }
        if(isset($this->album1))
        {
            $this->desc1 = $this->d->get_desc($this->album1);
        }
        else
            $this->desc1 = "";
        if(isset($this->album2))
        {
            $this->desc2 = $this->d->get_desc($this->album2);
        }
        else
            $this->desc2 = "";
        if(isset($this->album3))
        {
            $this->desc3 = $this->d->get_desc($this->album3);
        }
        else
            $this->desc3 = "";
    }
    function fetch_photos() // assign each photo to its corresponding array
    {
        if(isset($this->album1))  //for album1
        {
            $this->d->f_photos($this->album1);
            while($tmp =$this->d->fetch_row())
            {
              array_push($this->a1_photo,$tmp["file_name"]);

            }

        }



        if(isset($this->album2)) //for album2
        {
            $this->d->f_photos($this->album2);
            while($tmp =$this->d->fetch_row())
            {
                array_push($this->a2_photo,$tmp["file_name"]);

            }

        }


        if(isset($this->album3))   //for album3
        {
            $this->d->f_photos($this->album3);
            while($tmp =$this->d->fetch_row())
            {
                array_push($this->a3_photo,$tmp["file_name"]);

            }

        }

    }
    function cover1()        //return name of cover photo of the album
    {

        if(isset($this->album1))
        return  "../../images/album1/"."{$this->a1_photo[0]}";
        else
            return "../../images/no_sign.jpg";
    }
    function cover2()         //return name of cover photo of the album
    {
        if(isset($this->album2))
        return "../../images/album2/"."{$this->a2_photo[0]}";
        else
            return "../../images/no_sign.jpg";
    }
    function cover3()        //return name of cover photo of the album
    {
        if(isset($this->album3))
        return  "../../images/album3/"."{$this->a3_photo[0]}";
        else
            return "../../images/no_sign.jpg";
    }

    function slide($a) //create the slides for the choosen albums
    {
        if($a ==$this->album1)
        {
            for($i = 0;  $i<sizeof($this->a1_photo);$i++)
            {
                if($i == 0)
                    echo "<div class =".'"'."item active".'">'.
                     "<div class =".'"'."fill".'" '."style =".'"'."background-image:url('"."../../images/{$this->album1}/{$this->a1_photo[$i]}');".'"></div></div>';

                else
                    echo "<div class =".'"'."item ".'">'.
                        "<div class =".'"'."fill".'" '."style =".'"'."background-image:url('"."../../images/{$this->album1}/{$this->a1_photo[$i]}');".'"></div></div>';


            }
        }
       else if($a ==$this->album2)
        {
            for($i = 0;  $i<sizeof($this->a2_photo);$i++)
            {
                if($i == 0)
                    echo "<div class =".'"'."item active".'">'.
                        "<div class =".'"'."fill".'" '."style =".'"'."background-image:url('"."../../images/{$this->album2}/{$this->a2_photo[$i]}');".'"></div></div>';

                else
                    echo "<div class =".'"'."item ".'">'.
                        "<div class =".'"'."fill".'" '."style =".'"'."background-image:url('"."../../images/{$this->album2}/{$this->a2_photo[$i]}');".'"></div></div>';


            }
        }
       else if($a ==$this->album3)
        {
            for($i = 0;  $i<sizeof($this->a3_photo);$i++)
            {
                if($i == 0)
                    echo "<div class =".'"'."item active".'">'.
                        "<div class =".'"'."fill".'" '."style =".'"'."background-image:url('"."../../images/{$this->album3}/{$this->a3_photo[$i]}');".'"></div></div>';

                else
                    echo "<div class =".'"'."item ".'">'.
                        "<div class =".'"'."fill".'" '."style =".'"'."background-image:url('"."../../images/{$this->album3}/{$this->a3_photo[$i]}');".'"></div></div>';


            }
        }

    }
    function to_slides($al ,$num) // determines if the album cover is a link to the slide show for the choosen album
    {
        if(isset($al))
            echo"href=".'"'."slider.php?al={$al}&cp={$this->active_page}&desc={$num}".'"' ;
            else
                echo "";
    }
}

?>