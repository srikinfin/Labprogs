<html>

  <head> </head>
  <body>
  <h3> Search Result </h3>
  <hr>
  
  <?php>
	$link=mysql_connect("localhost","root"),mysql_select_db("thirteendb");
	
	
	$n=$_POST["name"];
	print "Entered Name is $n \n";
	
	$var=msql_query("SELECT * FROM contact WHERE name like '$n'");
  
	echo "<table border size=1>";
	echo "<tr><th>Name</th> <th>Address 1</th> <th> Address 2 </th> <th>E-mail</th> </tr>";
	
	while($arr=mysql_fetch_row($var))
	{
	      echo "<tr><td>$arr[0]</td> <td> $arr[1]</td> <td> $arr[2]</td> <td> $arr[3]</td> </tr>";
	}
	
	echo "</table>";
	mysql_free_result($var);
	mysql_close($link);
	
	
   ?>
   
   <hr>
   <form action="lab13b.html">
   <input type=submit value="back" >
   </form>
   </body>
   </html>