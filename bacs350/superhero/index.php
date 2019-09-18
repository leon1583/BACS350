<?php

    /*
        Superhero Project Workshop
    */

    // Get the render_page and render_card functions
    include 'views.php';


    // Set custom settings
    $site_title = 'Caleb\'s Superheros:';
    $page_title = 'The Superhero Gallery of Caleb Leonard';

    $card1 = render_card("Batman", "The strong hero in Gotham City");
    $card2 = render_card("Superman", "Superhero of the world from Krypton");

    $card3 = render_card("Spiderman", "Can get tangled up, but finds a way out");
    $card4 = render_card("Iron Man", "Fe - arless hero. Okay, I'll leave now");

    $card5 = render_card("Bibleman", "A superhero of a cheesy TV show I vaugely remember watching as a kid. Honestly, I never liked it...");
    $card6 = render_card("Hezekiah", "A king of Judah who brought healing and revival to the country of Israel. Read about him in 2 Chronicles 29-32");

    $content =  '
        <div class="container-fluid">
            <div class="row">
                ' . $card1 . $card2 . $card3 . $card4 . $card5 . $card6 . '
            </div>
        </div>
    ';


    // Create HTML and output the page
    echo render_page($site_title, $page_title, $content);


// ' . $card1 . $card2 . $card3 . $card4 '
?>
