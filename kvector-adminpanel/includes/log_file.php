<?php
class log           // class to adjust the log file (writing or reading from it)
{
    private $handle ;
    private $action;
    static $lg = NULL;

    private function  __construct()
    {

    }
    static function  get_instance()
    {
        if(log::$lg == null)
        {log::$lg = new log();
            return (log::$lg);}
        else
            return log::$lg;
    }
    public function set_action($ac)
    {
        $this->action = $ac;
    }
    public function write_action()    // function to write action to file and date of execution
    {
        $this->handle = fopen("../includes/log.txt","at");
        $tmp =date("d-m-Y",time());
        fwrite($this->handle,$this->action.": {$tmp}\n");
        fclose($this->handle);
    }
    public function read_actions()       // class to read all the actions done in the  log file
    {
        if (! ($this->handle = fopen("../includes/log.txt","rt")))
            die("couldnt read from file :file doesn't exist");
        if(filesize("../includes/log.txt")>0)
        {
            while(!feof($this->handle))
            {
                echo "<tr> <td> ".fgets($this->handle)." </td> </tr><br/>";
            }
        }
        fclose($this->handle);
    }
    public function clear_log() // to clear the log file
    {
        $this->handle= fopen("../includes/log.txt","w");
        fclose($this->handle);
    }

}
$log = log::get_instance();
?>