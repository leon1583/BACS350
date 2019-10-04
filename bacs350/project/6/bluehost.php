<?php

    // Use the proper settings to connect to the Bluehost database

    $port = '3306';
    $dbname = 'indingg5_subscribers';
    $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
    
    $username = 'indingg5_bacs350';
    $password = 'Calgary2018!';

    echo "<h1>Connect to Bluehost Database</h1>
          <p>Database: $dbname</p>
          <p>User: $username</p>";

    $db = new PDO($db_connect, $username, $password);

    echo '<p>Database is connected</p>
        <p><a href="local.php">Attempt Local Connection</a></p>
        <p><a href="index.php">Database Connection</a></p>';

?>
