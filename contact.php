<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Name:
        <input type="text" name="name"><br><br>
        Mobile:
        <input type="text" name="mobile"><br><br>
        Mesage:
        <textarea name="message"></textarea><br><br>
        <input type="submit" name="submit" value="send">
    </form>
<?php
if(isset($_POST['submit']))
{
    echo"Message send Successfully";

}
?>
</body>
</html>
