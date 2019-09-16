<?php

    /*
        Superhero Project Workshop
    */

    // Get the render_page and render_card functions
    include 'views.php';


    // Set custom settings
    $site_title = 'UNC BACS 350';
    $page_title = 'Calebs Superhero Gallery';

    $card1 = render_card("Batman", "The strong hero in Gotham City");
    $card2 = render_card("Superman", "Superhero of the world from Krypton");

    //$card3 = render_card("Spiderman", "Can get tangled up, but finds a way out")
    //$card4 = render_card("Iron Man", "Fe - arless hero. Oaky, I'll leave now")

    $content =  '
        <div class="container-fluid">
            <div class="row">
                ' . $card1 . $card2 . '
            </div>
        </div>
    ';


    // Create HTML and output the page
    echo render_page($site_title, $page_title, $content);

?>
