<?php

    // Code to define functions
    require_once 'views.php';
    require_once 'notes_views.php';
    require_once 'notes_db.php';


    // List subscriber records
    $list = render_notes(list_notes ($db));

    
    // Button to go to other views
    $add_button = '<p><a class="button" href="insert.php">Add Note</a></p>';

    
    // Display the HTML in the page
    $intro = '
        <p>
            These are notes that are placed into a database. As you can see, they are populated. You are given the option to add, delete, or edit notes.
        </p>
        <p>
            <b>Please note, to see the list updated, you need to force refresh the browser by pressing <em> shift + F5</em></b>
        </p>
         
    ';
    $content = "$intro $add_button $list";

    // Show the page
    echo render_page('Caleb\'s Notes Database', "Leave a helpful note", $content);
?>
