<!DOCTYPE html>
<?php
session_start();
setcookie("NumsVisits", 0, time() + 3600);
include_once "db.php";
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

  $numvisits = $_COOKIE["NumsVisits"];
  echo $_COOKIE["NumsVisits"] . "<br><br>";
  if($_COOKIE["NumsVisits"] == 0){
    setcookie("NumsVisits", $_COOKIE["NumsVisits"] + 1, + 3600);
    echo "Welcome! This is the first time you are visiting this Web page.";
  } else {
    setcookie("NumsVisits", $_COOKIE["NumsVisits"] + 1, + 3600);
    echo "You have visited this Web page " . $_COOKIE["NumsVisits"] . " ";
    if($numsvisited == 1){
      echo "time before! <br><br>";
    } else {
      echo "times before! <br><br>";
    }
  }

?>

<?php
$df = disk_free_space("/");
echo "<br><br>Available Space in bytes: " . $df;
echo "<br><br>" . session_id() . " is your sessionid";

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
