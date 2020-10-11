<!DOCTYPE html>
<?php
include_once "db.php";

ini_set('session.gc_maxlifetime', 3600);
session_set_cookie_params(3600);
session_start();

$numsvisits;
if(!isset($_COOKIE["NumsVisits"])){
  setcookie("NumsVisits", 0, time() + 3600, '/');
  $numsvisits = 0;
} else{
  $numsvisits = $_COOKIE["NumsVisits"] + 1;
  setcookie("NumsVisits", $numsvisits, time() + 3600, '/');
}
?>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="styles.css" type="text/css" media="screen" charset="utf-8">
    <title>Assessment</title>
  </head>
  <body>
<?php
  $name = "John Geohan";
  echo "My name is: $name " . "<br><br>";

  for($i = 0; $i <= 5; $i++){
    echo "the number is: $i" . "<br><br>";
  }

  echo "Today it is " . date("l") . "<br><br>";
  echo "and the month is " . date("F") . "<br><br>";

  echo "A random number: <b>" . rand(0, 1000) . "</b><br><br>";
  echo "Default Timeout is: 24 minutes.<br><br>";
  echo "Timeout is now: 1 hour.<br><br>";



?>

<?php
$root;
$df;
if($numsvisits == 0){
  echo "Welcome! This is the first time you are visiting this Web page.";
} else {
    echo "You have visited this Web page " . $numsvisits . " ";
    if($numsvisits == 1){
      echo "time before! <br><br>";
    } else {
      echo "times before! <br><br>";
    }
}
if (DIRECTORY_SEPARATOR === '/') {
  $root = "/";
  $df = disk_free_space($root);
}

if (DIRECTORY_SEPARATOR === '\\') {
  $root = "C:\\\\";
  $df = disk_free_space($root);
}

echo "<br><br> Drive: " . $root;
echo "<br><br>Available Space in bytes: " . $df;
echo "<br><br>" . session_id() . " is your sessionid<br><br>";
?>

    <table border=1>
      <tr>
        <td class="header">Company</td>
        <td class="header">Last Name</td>
        <td class="header">First Name</td>
      </tr>
<?php
$sql = "SELECT * FROM employee;";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
  echo "<tr>";
  foreach($row as &$data){
    echo "<td>{$data}</td>";
  }
  echo "</tr>";
}
echo "</table>";
?>

  </body>
</html>
