<?php
  session_start();
    
  if(isset($_SESSION["views"]))
  { $_SESSION["views"] = $_SESSION["views"]+1;   }
  
  else{  $_SESSION["views"]=1; }
  
  $value=$_SESSION["views"];
  print "count of visit is $value ";
  
  ?>
      