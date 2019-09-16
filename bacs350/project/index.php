<?php

    /*
        Create page content by rendering a template.
    */

    $site_title = 'Caleb Project 3;
    
    $page_title = "Projects";
    
    $content = '
        <p>
            <a href="..">Home</a>
        </p>
        <p> 
            Projects in BACS 350.
            I am working on editing this file, showing the changes I made in GitHub
        </p>
        
        <ul>
            <li>
                <a href="01">Project #1 - Setup Web Hosting</a>
            </li>
            <li>
                <a href="02">Project #2 - Page Template</a>
            </li>
        </ul>
    ';

    include '../views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
