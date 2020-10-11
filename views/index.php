<?php
ini_set('session.gc_maxlifetime', 3600);
session_set_cookie_params(3600);
session_start();
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
    <main class="index-main">
      <h1>Welcome to my assessment</h1>
      <p>I have organized the assessment into self made categories and split the assosiated tasks to their own seperate pages to make the page feel less cluttered. You can use the links in the navbar at the top to find each task asked of me to complete.</p>
    </main>
  </body>
</html>
