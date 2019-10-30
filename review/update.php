<?php
//Check to make sure NOTES code is not used. Remove all NOTES variables and add all REVIEW variables
    // Code to define functions
    require_once 'views.php';
    require_once 'review_views.php'; //notes was used here
    require_once 'review_db.php'; //notes was used here


    // Pick out the inputs
      $id = filter_input(INPUT_POST, 'id');
      $designer = filter_input(INPUT_POST, 'designer');
      $url = filter_input(INPUT_POST, 'url');
      $report = filter_input(INPUT_POST, 'report');
      $score = filter_input(INPUT_POST, 'score');
      $date = filter_input(INPUT_POST, 'date');

//    $id    = filter_input(INPUT_POST, 'id');
//    $title = filter_input(INPUT_POST, 'title');
//    $body  = filter_input(INPUT_POST, 'body');
//    $date  = filter_input(INPUT_POST, 'date');

//        date_default_timezone_set("America/Denver");
//        $date  = date('Y-m-d g:i:s a');
        

    // Gather user input with a form
     if ($title == '' || $body == '' || $date == '') {
        
        // Form view to add notes
        $id = filter_input(INPUT_GET, 'id');
        $review = list_reviews($db, $id); //this function may be incorrect
        $edit_form = edit_review_form($note); //this function may be incorrect

        // Display the HTML in the page
        echo render_page('Caleb\'s Reviews', "Edit Review", $edit_form);
       }
        else {
        
        // Add record and return to list
        if (update_review ($db, $id, $designer, $url, $report, $score $date)) //this function and variables may be incorrect
        {
            header("Location: index.php");
        };
    }

//    if ($title == '' || $body == '' || $date == '') {
//        
//        // Form view to add notes
//        $id = filter_input(INPUT_GET, 'id');
//        $note = get_note($db, $id);
//        $edit_form = edit_note_form($note);
//
//        // Display the HTML in the page
//        echo render_page('Caleb\'s Reviews', "Edit Review", $edit_form);
//    }
//    else {
//        
//        // Add record and return to list
//        if (update_note ($db, $id, $title, $body, $date))
//        {
//            header("Location: index.php");
//        };
//    }
 
?>
