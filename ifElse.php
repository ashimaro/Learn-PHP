<!DOCTYPE html>
<html>
<body>

<?php
date_default_timezone_set("Asia/Kuala_Lumpur");

$time = date("h:i:s A");
echo "<p>The time (on the server) is " . $time;
echo ", and will give the following message:</p>";

$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
 
</body>
</html>
