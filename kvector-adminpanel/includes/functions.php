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
    $output.=" <div class=\"container\" style=\"position: absolute; top: 550px; bottom: 0; left: 620px; padding-right: 450px\">";
    $output.="<div class=\"alert alert-danger fade in\" >";
    $output.=" <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\" style=\"position: relative; top: -10px;\">&times;</a><ul>";
    foreach (validation::$errorList as $x)
    $output .="<li>$x</li>";
    $output.="</ul></div></div>";

    //$output.="  <div class=\"container\"style=\"position: absolute; top: 550px; bottom: 0; left: 400px;\"padding-right: 350px>";
    //$output .=" <div class=\"alert alert-danger fade in\">";
    //foreach (validation::$errorList as $x)
    //$output .="<li>$x</li>";
    //$output .="</ul><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\"style=\"position: relative; top: -37px;\"left: 10px;>&times;</a>";
    //$output .="</div></div>";
    
    echo $output;



}
?>