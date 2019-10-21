<?php

    // Code to define functions
    require_once 'views.php';
    require_once 'notes_views.php';
    require_once 'notes_db.php';


    // Pick out the inputs
    $title = filter_input(INPUT_GET, 'title'); //use INSERT_POST for secure
    $text = filter_input(INPUT_GET, 'body');
    $date = filter_input(INPUT_GET, 'date');


    if ($title == '' || $text == '' || $date == '') {
        
        // Form view to add notes
        $add_form = add_note_form();


        // Button to clear
        $clear_button = '<a href="delete.php">Reset Notes</a>';


        // Display the HTML in the page
        $intro = 'Enter the data for your note';
        $content = "$intro $list $add_form $clear_button";

        echo render_page('Caleb\'s Note Database', "Add Note", $content);
    }
    //else { }
        
        // Add record and return to list
        if (add_note ($db, $title, $text, $date))
        {
            header("Location: index.php");
        };
?>
