<?php

    // Code to define functions
    require_once 'views.php';
    require_once 'superhero_views.php';
    require_once 'superhero_db.php';


    // List superhero records
    $list = render_superheroes(list_superheroes ($db));

    
    // Button to go to other views
    $add_button = '<p><a class="button" href="insert.php">Add Subscriber</a></p>';

    
    $intro = '
        <p>
            Caleb\'s superheroes database
        </p>
        <p>
            Superheros should populate below.
        </p>
    ';
    $content = "$intro $add_button $list";

    // Show the page
    echo render_page('The Superheroes', "List of Heroes", $content);
?>
