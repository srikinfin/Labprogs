<?
mysql_connect("localhost","root","admin") or die("connection failed!!");
$tit=$_GET['tit'];
if($tit != ""){
$res=mysql_db_query("fourteendb","select ascn_no,author,edition,publication from book where title='$tit'") or die("Query failed!!");}
if(mysql_num_rows($res))
{
print "<h1><font color=orange><center>AVAILABLE BOOKS FOR GIVEN TITLE</center><br>$tit<br><table border=1><tr><th>ACCESSION_NO</TH><TH>AUTHOR</TH><TH>EDITION</TH><TH> PUBLICATION</TH></TR>";
while($arr=mysql_fetch_row($res))   {print"<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td></tr> ";}

}
else
{print"<body bgcolor=cyan><br><br><br><center><H2><FONT color=red SIZE=8>SORRY</FONT><br><center>NO BOOKS ARE AVALIBLE FOR YOUR TITLE</H2><form action=p9.html><br><br><input type=submit value=GOBACK>";
}
?>
