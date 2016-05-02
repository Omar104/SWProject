
<?php // function to redirect to another website

function redirect($loc = NULL)
{
    if($loc !=NULL)
    {
        header("Location:{$loc}");
        exit;
    }
}

function report_error()      // function to report errors to the user
{
    $output="";
    $output.=" <div class=\"container\" style=\"position: absolute; top: 550px;  left: 400px; padding-right: 550px\">";
    $output.="<div class=\"alert alert-danger fade in \" id=\"myAlert\" >";
    $output.=" <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\" style=\"position: relative; top: -10px;\">&times;</a><ul>";

    foreach (validation::$errorList as $x)
        $output .="<li>$x</li>";
    $output.="</ul></div></div>";






    echo $output;



}
?>