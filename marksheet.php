<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Tamil:
        <input type="number" name="tamil"><br><br>
        English:
        <input type="number" name="english"><br><br>
        Maths:
        <input type="number" name="maths"><br><br>
        <input type="submit" name="calc" value="calculate">
    </form>
<?php
if(isset($_POST['calc']))
{
    $t=$_POST['tamil'];
    $e=$_POST['english'];
    $m=$_POST['maths'];
    $total=$t+$e+$m;
    $avg=$total/3;
    echo"Total=$total<br>";
    echo"Average=$avg";
}
?>
</body>
</html>