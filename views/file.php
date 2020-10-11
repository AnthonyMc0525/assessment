<?php
$root;
$df;
if (DIRECTORY_SEPARATOR === '/') {
  $root = "/";
  $df = disk_free_space($root);
}

if (DIRECTORY_SEPARATOR === '\\') {
  $root = "C:\\\\";
  $df = disk_free_space($root);
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
echo "<br><br> Drive: " . $root;
echo "<br><br>Available Space in bytes: " . $df;
?>
    </main>
  </body>
</html>
