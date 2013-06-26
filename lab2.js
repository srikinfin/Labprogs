function fibonacci()
{

	var f1,f2,f3;
	var range_input= prompt("Please enter the range of fibonnaci numbers to compute");
	document.write("The fibonacci numbers are <br />");
	
	f1=0;
	f2=1;
	document.write(f1,"<br />");
	document.write(f2,"<br />");


	for(i=2;i<range_input;i++)
	{
		f3=f1+f2;
		document.write(f3,"<br />");
		f1=f2;
		f2=f3;


	}
	

}

function squares()
{
	limit=prompt("Please enter a largest number, to compute squares of numbers ");
	var tables='';	

	for(number=1;number<=limit;number++)
	{
		tables+= +number+"x"+number+"="+(number*number)+"\n";

	}
	alert(tables);

}

function squares1()
{
	n = prompt("Enter the value of n");
	var j;
	for(var i=0;i<=n;i++)
	{
		j=i*i;
		alert("Square of "+i+" is "+j);
	}
}
