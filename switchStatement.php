<!DOCTYPE html>
<html>
<body>

<?php
$favcolor = "mg3";

switch ($favcolor) {
  case "mg3":
    echo "You choose Myvi Advance!";
    break;
  case "honda":
    echo "You choose Honda Civic";
    break;
  case "gtr":
    echo "You choose GTR!";
    break;
  default:
    echo "You didn't choose any cars!";
}
//Instead of writing many if..else statements, you can use the switch statement
?>
 
</body>
</html>
