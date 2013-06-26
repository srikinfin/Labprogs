var top;
var originalpos;

   function onTop(curpos,a)
   {
      var b=document.getElementById(curpos).style;
      b.zIndex=10;
      top=document.getElementById(curpos).id;
      originalpos=a;
   }
function samepos()
{
    document.getElementById(top).style.zIndex = originalpos;
 
}