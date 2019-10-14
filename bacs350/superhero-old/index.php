<?php

    /*
        Superhero Project Workshop
    */

    // Get the render_page and render_card functions
    include 'views.php';


    // Set custom settings
    $site_title = 'Caleb\'s Superheros:';
    $page_title = 'The Superhero Gallery of Caleb Leonard';

    $image = '<image alt="batman" class="crop" src="batman.jpg" width=90% heigth=300px>';
    $card1 = render_card($image, "Batman", "The strong hero in Gotham City");

    $image = '<image alt="superman" class="crop" src="superman.jpg" width=90% heigth=300px>';
    $card2 = render_card($image, "Superman", "Superhero of the world from Krypton");

    
    $image = '<image alt="spiderman" class="crop" src="spiderman.jpg" width=90% heigth=300px>';
    $card3 = render_card($image, "Spiderman", "Can get tangled up, but finds a way out");

    $image = '<image alt="ironman" class="crop" src="ironman.jpg" width=90% heigth=300px>';
    $card4 = render_card($image, "Iron Man", "Fe - arless hero. Okay, I'll leave now");

    
    $image = '<image alt="bibleman" class="crop" src="bibleman.jpg" width=90% heigth=300px>';
    $card5 = render_card($image, "Bibleman", "A superhero of a cheesy TV show I vaugely remember watching as a kid. Honestly, I never liked it...");

    $image = '<image alt="hezekiah" class="crop" src="hezekiah.jpg" width=90% heigth=300px>';
    $card6 = render_card($image, "Hezekiah", "A king of Judah who brought healing and revival to the country of Israel. Read about him in 2 Chronicles 29-32");

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
