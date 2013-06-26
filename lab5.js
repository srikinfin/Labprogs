function parta()
{
   var top="stack1";
   function ontop(curpos)
   {
      var a=document.getElementById(top).style;
      a.zIndex=1;
      var b=document.getElementById(curpos).style;
      b.zIndex=2;
      top=document.getElementById(curpos).id;
      
   }
   
}