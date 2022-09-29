<!DOCTYPE HTML>
<html>
<head></head>
<body>
<?php
  function runMyFunction() {
    echo 'I just ran a php function';
  }

  if (isset($_GET['hello'])) {
    runMyFunction();
  }
?>

Hello there!

<a href='z.php?hello=true'>Run PHP Function</a>

</body>
</html>