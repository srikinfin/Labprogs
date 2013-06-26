function internalcalc()
{

   document.write("<table border=1 cellpadding=15>");
   for(i=1;i<41;i++)
      {
        var gg= i/1.6;
        document.write("<tr><td>" +i+ "</td><td>----</td><td>" +gg+ "</td><td>----</td><td>"+Math.round(gg)+"</td>");

      }


      document.write("</table>");
}
