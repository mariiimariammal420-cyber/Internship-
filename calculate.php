<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Number1:
        <input type="number" name="num1"><br><br>
        Number2:
        <input type="number" name="num2"><br><br>
        <input type="submit" name="add" value="Add">

    </form>
<?php
if(isset($_POST['add']))
{
    $a=$_POST['num1'];
    $b=$_POST['num2'];
    echo"Sum=".($a+$b);
}
?>
</body>
</html>