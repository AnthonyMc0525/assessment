<?php
session_start();
include_once "../db.php";
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
    </main>
  </body>
</html>
