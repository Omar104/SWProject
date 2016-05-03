<?php
class log            // class to adjust the log file (writing or reading from it)
{
    static $handle ;
    static $action;

    static  function set_action($ac)
    {
        log::$action = $ac;
    }
    static function write_action()    // function to write action to file and date of execution
    {
        log::$handle = fopen("log.txt","at");
        $tmp =date("d-m-Y",time());
        fwrite(log::$handle,log::$action.": {$tmp}\r\n");
        fclose(log::$handle);
    }
    static function read_actions()       // class to read all the actions done in the  log file
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
    static function clear_log() // to clear the log file
    {
        log::$handle= fopen("log.txt","w");
        fclose(log::$handle);
    }
}
?>