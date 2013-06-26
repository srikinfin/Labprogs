<?php
mysql_connect('localhost', 'root', 'admin');
$acn=$_GET['acn'];
$tit=$_GET['tit'];
$aut=$_GET['aut'];
$edi=$_GET['edi'];
$pub=$_GET['pub'];
if($acn && $tit && $aut && $edi && $pub ){
mysql_db_query("fourteendb"," insert into book values('$acn','$tit','$aut','$edi','$pub') ");
$res=mysql_db_query("test","select * from book");
echo"<body bgcolor=cyan><br><br><h1><center><font color=magenta>
RESULT OF THE QUERY</H1><table border=1 align=center>
<tr><th>ACSESSION_NO</TH><TH>TITTLE</TH><TH>AUTHOR</TH><TH>EDITION</TH><TH>PUBLICATIN</TH</TR>";
while($arr=mysql_fetch_row($res))
{print"<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td></tr>";}
}
else
{
print "<body bgcolor=cyan>
<h1 align=center>DONT LET FEILDS TO BE NULL<BR>
<form action =lab14a.html>
<input type=submit value=BACK>";
}
?>
