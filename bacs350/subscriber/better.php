<h1>Subscriber Database- Better</h1>

<p>
    A more organized way to view the code for the database.
</p>


<?php

    // Access all of the code for Subscribers data
    require 'subscribers.php';
    

    // Build a list of subscribers in HTML
    $subscribers = query_subscribers($db);

    // Build a list of subscribers in HTML
    $list = render_subscriber_list($subscribers);
    
   // Build a list of subscribers in HTML
    $table = render_subscriber_table($subscribers);

    // Output the list
    echo "<h2>List</h2>$list<h2>Table</h2>$table";
?>
