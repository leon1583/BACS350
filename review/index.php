<?php

    // Code to define functions
    require_once 'views.php';
    require_once 'review_views.php';
    require_once 'review_db.php';


    // List review records
    $list = render_reviews(list_reviews ($db)); //gives array, need to pass array
//    $x = $list;
//    echo $x;
   
    
    // Button to go to other views
    $add_button = '<p><a class="button" href="insert.php">Add Review</a></p>';


    // Show the page
    $content = "$add_button $list";
    echo render_page('Caleb\'s Webpage', "Peer Reviews for my page", $content);
?>
