<html>
<body>
<?php
$self = $_SERVER['PHP_SELF'];
$dbh = mysql_connect('localhost', 'root', 'admin') or
die(mysql_error());
mysql_select_db('thirteendb') or die(mysql_error());
if(isset($_POST['name']))
{
$nme = $_POST['name'];
$ad1 = $_POST['add1'];
$ad2 = $_POST['add2'];
$eml = $_POST['email'];
if($nme != "" && $ad1 != "")
{
$query = "INSERT INTO contact VALUES
('$nme', '$ad1', '$ad2', '$eml')";
$result = mysql_query($query) or die(mysql_error());
}
else
echo "one of the field is empty";
}
mysql_close($dbh);
?>
<FORM ACTION="<?=$self?>" METHOD="POST">
<P>
Name: <INPUT TYPE=text NAME="name" value=""> <BR>
Address 1:<INPUT TYPE=text NAME="add1" value=""><BR>
Address 2:<INPUT TYPE=text NAME="add2" value=""><BR>
email:<INPUT TYPE=text NAME="email" value=""><BR>
<INPUT TYPE=submit>
</FORM>
</body>
</html>
