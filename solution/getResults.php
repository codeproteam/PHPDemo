<!doctype html>
<html>
  <head>
    <title>GET VALUE</title>
  </head>
  <body>
    <?php
    
      /*1. get the first value submitted via GET method from getValue.html */
      $first = $_GET['first'];
      
      /*2. get the second value submitted via GET method from getValue.html*/
      $second = $_GET['second'];
      
      /*3. compute and print the sum*/
      echo (int)$first + (int)$second;
    ?>
  </body>
</html>
