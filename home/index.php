<?php

    /*
        Create page content by rendering a template.
    */

    $site_title = 'Caleb\'s BACS 350 App';
    
    $page_title = "Caleb's BACS 350 App Main Room";
    
    $content = '
        <p> 
            Welcome to Caleb\'s BACS 350 App. This was developed with the help of Mark Seaman for his BACS 350 class at the University of Northern Colorado. <br> You are currently visiting the main Room of this app. 
            <br>
            The first list is the Room List. The list contains links to each Room the app has.
            <br>
            After the Room List is the Projects List. The projects are assignments that were completed for the BACS 350 class.  The projects built were incorporated into the Rooms.
            <br>
            After the Projects List is my personal links (My Links). The first link is to the code for anyone to view, which is posted on GitHub. The second link is to the BACS 200 documents I built for Mark\'s BACS 200 class. Finally, I have a link to my website\'s homepage.* 
            <br>
            After the My Links List, I have Mark\'s Links. This list contains links to Mark Seaman\'s website. Please be sure to chcek out his applicaiton. He is a great developer and taught me alot about coding with HTML, PHP and Java Script. He also showed me how to use version control and how important it is.
            <br>
            <br>
            After the links, I give a breif introduction about who I am and my experience.
            <br>
            
            *Note: this website is used primarly for blogging, photography, and media for the glory of God. None of this Web Development information will be present on the main portion of this site.
        </p>
        <br>        
        
        
        
         <p> 
            The Room List:
        </p>
        <ul>
            <li>
                <a href="https://findingfocusministries.com/bacs350/docman/index.php">Documents Room</a>
            </li>
            <li>
                <a href="https://findingfocusministries.com/bacs350/notes/index.php">Notes Room</a>
            </li>
            <li>
                <a href="https://findingfocusministries.com/bacs350/slides/index.php">Slides Room</a>
            </li>
            <li>
                <a href="https://findingfocusministries.com/bacs350/planner/index.php">Planner Room</a>
            </li>
            <li>
                <a href="https://findingfocusministries.com/bacs350/review/index.php">Reviewer Room</a>
            </li>
            <li>
                <a href="https://findingfocusministries.com/bacs350/subscriber/index.php">Subscriber Room</a>
            </li>
            <li>
                <a href="https://findingfocusministries.com/bacs350/superhero/index.php">Superhero Room</a>
            </li>       
        </ul>
        
        
        
        <p> 
            Projects List:
        </p>
        <ul>
            <li> <a href="https://findingfocusministries.com">Project 1- WordPress Blog</a></li>
            <li> <a href="https://findingfocusministries.com/bacs350">Project 2 (THIS PAGE)</a></li>
            <li>
                <a href="https://findingfocusministries.com/bacs350/superhero/index.php">Project 3- Superhero Database</a>
            </li>
            <li>
                <a href="https://findingfocusministries.com/bacs350/planner/index.php">Project 4- Planner</a>
            </li>
            <li>
                <a href="https://findingfocusministries.com/bacs350/docman/index.php">Project 5- Docs Manager</a>
            </li>
            <li>
                <a href="https://findingfocusministries.com/bacs350/subscriber/index.php">Project 6- Subscriber Database</a>
            </li>
            <li>
                <a href="https://findingfocusministries.com/bacs350/superhero/index.php">Project 7- Superhero Database (Updated)</a>
            </li>
            <li>
                <a href="https://findingfocusministries.com/bacs350/notes/index.php">Project 8- Notes App</a>
            </li>
            <li>
                <a href="https://findingfocusministries.com/bacs350/review/index.php">Project 9- Review App</a>
            </li>
            <li>
                <a href="https://findingfocusministries.com/bacs350/slides/index.php">Project 10- Slides App</a>
            </li>
            <li>
                <a href="#">Project 11 (Complete App) - This Current Page is Project 11</a>
            </li>
            <li>
                <a href="https://findingfocusministries.com/bacs350/goals">Requirements, Goals, and Hints (Project 12)</a>
            </li>
            <li>
            <a href="https://findingfocusministries.com/bacs350/docman/index.php">Project Documentation (Project 13)</a>
            </li>
        </ul>
        
        
        
        
        <p> 
            My Links:
        </p>
        <ul>
            <li> <a href="https://github.com/leon1583/BACS350">My GitHub</a> 
            </li>
            <li> <a href="https://findingfocusministries.com/bacs200/">Homepage for BACS 200</a>
            </li> 
            <li>
            <a href="https://www.findingfocusministries.com/">My Home Page</a>
        </li>
        </ul>
        
        
        
        
        <p> 
            Mark\'s Links:
        </p>
        
        <ul>
            <li>
                <a href="https://shrinking-world.com/unc/bacs350">Mark\'s Sensi Server</a>
            </li>
            <li>
                <a href="https://unco-bacs.org/bacs350/">Mark\'s Demo</a>
            </li>
            <li>
                <a href="https://unco.instructure.com/courses/48080">Mark\'s Canvas</a>
            </li>
        </ul>
        <br>
        
        
        
        
        <p>
        Finally, a little about me. My name is Caleb Leonard. I graduated from University of Northern Colorado in December of 2019. I have experince working with technology, system administration, web development and some coding. At the time of writing this document (December of 2019), I have worked over 5 years in the technology industry performing mainly system administration tasks. Below is a picture of me.
        <br>
        Thank you for checking out the BACS 350 App!
        <br>
        </p>
        <img src="/bacs200/images/Leonard-Caleb.jpg" alt="Profile Picture" width="200">
    ';

    include 'views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
