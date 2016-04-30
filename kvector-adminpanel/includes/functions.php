<?php // function to redirect to another website
function redirect($loc = NULL)
{
    if($loc !=NULL)
    {
        header("Location: {$loc}");
        exit;
    }
}

function report_error()      // function to report errors to the user
{
    $output = "";
    $output .="<div class=\"container\">";
    $output .="<div class=\"alert alert-danger\"> <ul>";
    foreach (validation::$errorList as $x)
    $output .="<li>$x</li>";
    $output .="</ul><button type=\"submit\" ";
    $output .="href=\"{$_SERVER['PHP_SELF']}}\" ";
    //$output .="target=\"_blank\" ";
    $output .="class=\"btn btn-default btn-sm\" ";
    $output .="style=\"font-family: 'Rammetto One';font-size:18px;font-style: normal;font-variant: normal;font-weight: 500;line-height: 16px;color: #a94442;\">OK</button>";
    $output .="</div></div>";
    
    echo $output;
}
?>