<!doctype html>
<html>
  <head>
    <title>POST VALUE</title>
  </head>
  <body>
    <?php
    
      /* 1. get the first value submitted via POST method from postValue.html */
      $first = $_POST['first'];
      
      /* 2. get the second value submitted via POST method from postValue.html */
      $second = $_POST['second'];
      
      /* 3. compute and print the sum */
      echo (int)$first + (int)$second;
    ?>
  </body>
</html>
