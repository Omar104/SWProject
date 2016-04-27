<?php // function to redirect to another website
function redirect($loc = NULL)
{
    if($loc !=NULL)
    {
        header("Location: {$loc}");
        exit;
    }
}
function report_error($s)      // function to report errors to the user
{

    if($s != "")
   return $tmp = "onclick=".'"'."alert('{$s}')".'"';
    else
        return false;
}

?>