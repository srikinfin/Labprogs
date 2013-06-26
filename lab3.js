function vowel()
{
	string1=prompt("Please enter a string");
	

	for(i=0;i<=string1.length;i++)
	{
		if(string1.charAt(i)=="a"  || 
		   string1.charAt(i)=="e"  ||
		   string1.charAt(i)=="i"  ||
		   string1.charAt(i)=="o"  ||
		   string1.charAt(i)=="u"     )
		
		{ alert("Leftmost vowel "+string1.charAt(i)+" was found at position "+i); exit; }
		
	}		

	 	alert("Sorry no vowel found!"); 

	
}


function ReverseNumber()
{
	num=prompt("Please enter a number ");
	reversed_number = num.toString().split("").reverse().join("");
	alert("The reversed number is "+reversed_number);
}
