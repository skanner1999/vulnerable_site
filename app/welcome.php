<?php
   include('app/session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "app/logout.php">Sign Out</a></h2>
   </body>
   
</html>