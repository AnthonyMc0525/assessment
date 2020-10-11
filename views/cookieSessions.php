<?php
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
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../styles.css" type="text/css" media="screen" charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    <div>
      <nav>
        <ul>
          <li>
            <a href="index.php" target="_self">Home</a>
          </li>
          <li>
            <a href="knowledge.php" target="_self">General Knowledge</a>
          </li>
          <li>
            <a href="cookieSessions.php" target="_self">Cookies/Sessions</a>
          </li>
          <li>
            <a href="file.php" target="_self">File System</a>
          </li>
          <li>
            <a href="database.php" target="_self">Database</a>
          </li>
        </ul>
      </nav>
    </div>
    <main>
<?php
  echo "Default Timeout is: 24 minutes.<br><br>";
  echo "Timeout is now: 1 hour.<br><br>";

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

  echo "<br><br>" . session_id() . " is your sessionid<br><br>";
?>
    </main>
  </body>
</html>
