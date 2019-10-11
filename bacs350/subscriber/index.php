<h1>Subscriber Database</h1>

<p>
    The database of subscribers for Caleb Leonard.
</p>
<p>
    See a much <a href="better.php">Better Implementation</a>.
</p>

<h2>Subscribers</h2>
<?php

    // Connect to Subscribers database automatically
    require 'db.php';

    
    // Get a list of records into an array
    $query = "SELECT * FROM subscribers";
    $statement = $db->prepare($query);
    $statement->execute();
    $subscribers = $statement->fetchAll();


    // Create an HTML list on the output
    echo '<ul>';
    foreach($subscribers as $row) {
        echo "<li><b>$row[name]</b> - email: $row[email]</li>";
    }
    echo '</ul>';

?>

<p>This query was successful. :D</p>
