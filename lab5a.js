var top="stack1";
   function onTop(curpos)
   {
      var a=document.getElementById(top).style;
      a.zIndex=1;
      var b=document.getElementById(curpos).style;
      b.zIndex=10;
      top=document.getElementById(curpos).id;
      
   }