window.onload=function() { document.getElementById("chek1").onclick=checkUSN;}
function checkUSN(chek1)
{


	var parent = this.parentNode;

	var pgname = prompt("Please enter program name");
	ele = document.createElement("checkbox");
	
	ele.id=pgname;
	ele.value = pgname;
	
	parent.insertBefore(ele,this);

}

function checkSem()
{
}

