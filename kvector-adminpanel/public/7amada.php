<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forms</title>
</head>
<body>
<?php
print_r($_POST);
?>
<form action="test.php" method="post">
    <input type="text"  name="7mada">
    <input type="button" name="submit1" value="submit1">
</form>
</br>
</br>
<form action="test.php" method="post">
    <input type="text" name="yossy">
    <input type="button" name="submit2" value="submit2">
</form>
</body>
</html>