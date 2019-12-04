<?php

    /*
        Create page content by rendering a template.
    */

    $site_title = 'Caleb Leonard\'s BACS 350 Work';
    
    $page_title = "Caleb's Homepage";
    
    $content = '
        <p>
            <a href="https://www.findingfocusministries.com/">Home</a>
        </p>
        <p> <a href="https://github.com/leon1583/BACS350">My GitHub</a> 
        </p>
        <p> <a href="https://findingfocusministries.com/bacs200/">Homepage for BACS 200</a> 
        </p>
        <p> 
            This page is the beginning of an ongoing project in BACS 350. This is not as complete as I would like it to be. Check back later for future development!
        </p>
        
        <p> <a href="https://findingfocusministries.com/bacs350/docman/index.php">Project Documentation</a> 
        
        <p> 
            My Projects:
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
                <a href="https://findingfocusministries.com/bacs350/goals">Requirements, Goals, and Hints</a>
            </li>
        </ul>
        <p> 
            My Demos:
        </p>
        <ul>
            <li> <a href="https://findingfocusministries.com/bacs350/mydemo">Demo Home (For mydemo folder)</a></li>
            <li> <a href="https://findingfocusministries.com/bacs350/demo">Demo Home (For demo folder)</a></li>
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
        <img src="/bacs200/images/Leonard-Caleb.jpg" alt="Profile Picture" width="200px">
    ';

    include 'views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
