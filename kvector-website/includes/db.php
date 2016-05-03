<?php       //db_class
class datbase
{
    public $connection;                          // connection string
    private $last_query;                               // query string
    private $result;                              // result of query
    private $row;                                 // row of query
    static $db = NULL;                            //static variable to create one db instance
    public static  function  get_instance()      // singleton design pattern
    {
        if(datbase::$db == NULL)
        {
            datbase::$db = new datbase();
            return datbase::$db;
        }
        else
            return datbase::$db;
    }
    private function connect()                           // connect to database function

    {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "admins";
        $this->connection= mysqli_connect($host,$user,$pass,$dbname);
        if(!$this->connection)
        {
            die("connecting failed".mysqli_error($this->connection));
        }
    }

    private function  __construct()                                 // constructor to automatically connect to databse
    {
        $this->connect();
        $this->last_query = NULL;
        $this->result = NULL;
        $this->row = NULL;
    }

    function fetch_row()            // return row as a result of the query
    {
        if ($this->row = mysqli_fetch_assoc($this->result))
        return  ($this->row);
        else
        return false;
    }
    function fetch_element($s)
    {
        return $this->row["{$s}"];
    }
    function  close() // close connection
    {
        if(isset($this->connection)) {
            mysqli_close($this->connection);
            unset($this->connection);
        }
    }
    function confirm_query()  //confirm the succestion of the carried out query
    {
        if(!$this->result)
        {
           $output = "datbase error".mysqli_error($this->connection)."<br/> cause by this query {$this->last_query}";
            die($output);
        }
    }
    function no_albums()  // function to return the number of albums in the database
    {
        $this->last_query = "select count(*) from albums";
        $this->result = mysqli_query($this->connection,$this->last_query);
        $this->confirm_query();
        $this->row=$this->fetch_row();
        return $this->row["count(*)"];

    }
    function album_names($offset)   // retrive names of the 3 albums to display
    {
        $this->last_query ="select name from albums LIMIT 3 OFFSET {$offset}";
        $this->result = mysqli_query($this->connection ,$this->last_query);
        $this->confirm_query();
    }
    function f_photos($album)  //fetch photos of given album
    {
        $this->last_query  = 'select file_name from photo where album ="'."{$album}".'"';
        $this->result = mysqli_query($this->connection,$this->last_query);
        $this->confirm_query();
    }
    function  f_about()  //get the information for the about section
    {
        $this->last_query ='select * from about';
        $this->result = mysqli_query($this->connection,$this->last_query);
        $this->confirm_query();
        return  $this->fetch_row();
    }
    function get_desc($al)                   // get description of the album
    {
        $this->last_query =" select description from albums where name ="."'"."{$al}"."'";
        $this->result = mysqli_query($this->connection,$this->last_query);
        $this->confirm_query();
        $this->row = $this->fetch_row();
        return $this->row['description'];
    }
    function count_blogs()            // return number of blogs in the database
    {
        $this->last_query="select count(*) from blog";
        $this->result = mysqli_query($this->connection,$this->last_query);
        $this->confirm_query();
        $this->row = $this->fetch_row();
        return $this->row["count(*)"];
    }
    function get_blog($off)        // get the record of the blog of offset = $off
    {
        if ($off == 0)
            $this->last_query ="select * from blog LIMIT 1 ";
        else
        $this->last_query = "select * from blog LIMIT 1 ,{$off}";
        $this->result = mysqli_query($this->connection,$this->last_query);
        $this->confirm_query();
        return $this->fetch_row();

    }
    function get_admin_name($admin_user_name)  // function to get the admin full name and if he is a super
    {
        $name = array();
        $this->last_query  = "select first_name ,last_name ,super_admin from admin ";
        $this->last_query .= "where username = '{$admin_user_name}'";
        $this->result = mysqli_query($this->connection,$this->last_query);
        $this->confirm_query();
        $this->row = $this->fetch_row();
        $name["first_name"] = $this->row["first_name"];
        $name["last_name"] = $this->row["last_name"];
        $name["isSuper"] = $this->row["super_admin"];
        return $name;
    }
}


$database = datbase::get_instance(); // creating object using singletaion design pattern
?>

