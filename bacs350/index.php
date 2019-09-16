<?php

    /*
        Create page content by rendering a template.
    */

    $site_title = 'Caleb Leonard Taking Class in BACS 350';
    
    $page_title = "Caleb's Incomplete Page";
    
    $content = '
        <p>
            <a href="https://www.findingfocusministries.com/">Home</a>
        </p>
        <p> 
            This page is the beginning of an ongoing project in BACS 350. This is not as complete as I would like it to be. Check back later for development!
        </p>
        
        <p> 
            Some different links below:
        </p>
        <ul>
            <li> <a href="https://apologiachurch.com/">A Solid Biblical Church:</a></li>
            <li>
                <a href="https://www.youtube.com/watch?v=xsRDTfuksyI">My favorite city in Canada:</a>
            </li>
            <li>
                <a href="https://www.youtube.com/channel/UCDRsebkky22olSCVtKNQjfg">My Personal YouTube Channel:</a>
            </li>
        <p> 
            Different rooms within this PHP app will contain different types of info. Note: Caleb has not built any of this yet... please let me know if I need to build these. If so, I would like to do it with you at your office during your office hours. Thanks!
        </p>
        
        <ul>
            <li>
                <a href="demo">Marks Code Demos</a>
            </li>
            <li>
                <a href="pattern">Marks Patterns </a>
            </li>
            <li>
                <a href="project">Marks Projects</a>
            </li>
        </ul>
    ';

    include 'views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
