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
  $name = "John Geohan";
  echo "My name is: $name " . "<br><br>";

  for($i = 0; $i <= 5; $i++){
    echo "the number is: $i" . "<br><br>";
  }

  echo "Today it is " . date("l") . "<br><br>";
  echo "and the month is " . date("F") . "<br><br>";

  echo "A random number: <b>" . rand(0, 1000) . "</b><br><br>";
?>
    </main>
  </body>
</html>
