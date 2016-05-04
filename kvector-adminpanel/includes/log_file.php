<?php
class log            // class to adjust the log file (writing or reading from it)
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
        $lg = new log();
        else
            return log::$lg;
    }
    public function set_action($ac)
    {
        log::$action = $ac;
    }
    public function write_action()    // function to write action to file and date of execution
    {
        log::$handle = fopen("log.txt","at");
        $tmp =date("d-m-Y",time());
        fwrite(log::$handle,log::$action.": {$tmp}\r\n");
        fclose(log::$handle);
    }
    public function read_actions()       // class to read all the actions done in the  log file
    {
        if (! (log::$handle = fopen("log.txt","rt")))
            die("couldnt read from file :file doesn't exist");
        if(filesize("log.txt")>0)
        {
            while(!feof(log::$handle))
            {
                echo fgets(log::$handle)."</br>";
            }
        }
        fclose(log::$handle);
    }
    public function clear_log() // to clear the log file
    {
        log::$handle= fopen("log.txt","w");
        fclose(log::$handle);
    }

}
$log = log::get_instance();
?>