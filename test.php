<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forms</title>
</head>
<body>
<?php print_r($_POST);?>

<form action="test.php" method="post">
    <input type="text" name="user" >
    <input type="text" name="pass">
    <input  type="submit" value="submit">
</form>

</body>
</html>