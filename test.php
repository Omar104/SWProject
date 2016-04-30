<?php
require_once ("kvector-website/includes/db.php");

?>


<!DOCTYPE html>
    <html lang="en">

    <head>


    </head>
    <body>

<?php
$tmp = "khaled@#@#";
filter_var($tmp,FILTER_SANITIZE_ENCODED,FILTER_FLAG_STRIP_HIGH);
 echo $tmp;

?>
</body>
    </html>

<?php
$database->close();
?>