#!/usr/bin/perl
use CGI ":standard";
use DBI;

print header;
print start_html;

$db=DBI->connect("DBI:mysql:tendb","root","admin");
$n=param('username_input');
$a=param('userage_input');

$st=$db->prepare("insert into stu values('$n','$a')");
$st->execute();

$st=$db->prepare("select * from stu");
$st->execute();

print "<table border=1> <tr><th> Name</th><th>Age</th></tr>";

while(($n,$a)=$st->fetchrow())
{
	print "<tr><td>$n</td><td>$a</td></tr>";
}

print "</table>";
$st->finish();
$db->disconnect();
print end_html;
