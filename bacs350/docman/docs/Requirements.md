# Requirements
* This document contains the requirements for the brain app
* This document will answer the question:
    * What is the problem?

# Question for Brain App
* First identify the problem(s) that need to be solved
* Be concise
* Start to brainstorm ideas for how to solve them

## Problems That Need to Be Solved
* Build each room (done)
    * Need to have every room in the app
    * Homepage
    * Superhero Database
    * Subscriber Database
    * Planner
    * Docs Manager
    * Notes App
    * Review App
    * Slides App
* Documentation (done)
    * Document all issues, requirements, testing, and code
    * Place the documentation inside Docs Manager
    * Note: added another folder, goals, from root directory for some hints and other issues
* Ease of Use (done)
    * Make the App easy to use for every room
    * Specifically, add the list of available picture names (plus extensions) for users who want to add a superhero
* Privacy (done)
    * Hide the log in information for the database
    * Reference file from secret_settings.php
* The "Brain" must have all rooms "connected" to each other
    * The homepage is the centeral location
    * Link all projects from homepage (done)
    * Will need to make sure every room has a link to return to the homepage
* The rooms need to be connected with each other
    * Have links to other rooms to bypass homepage
    * Links should sit on the footer
* The rooms should be clear and concise
    * The names of each room should be simple: example, "Superhero Gallery"
    * Will need to update the names for each room
* The App Needs to be secure
    * Create a login page to prevent unauthorized access
    * Will help protect the data
* The app design
    * Make all design consistient--green and brown (done)
    * Add varying pictures for each page from a random pool of images
    * Homepage should have a widget slideshow
* The code for the App will need to be refactored
    * Remove all forms of duplication
    * Create secret folder(s) in home directory to hide secret common files

# Ideas to solve problems
* This protion of the document features ideas to resolve identified problems
* Two sections- issues resolved, issues need to be resolved:

## Ideas to solve problems (resolved)
* Build each room
    * Ask Mark for help when stuck
    * Use his template code (when given)
* Documentation
    * Document changes and ideas
    * Look at issues under Git Repo for ideas
* Ease of Use
    * Simplify each room
    * Make it less formal
    * Apply the grandma test
* Privacy
    * Create secret_settings.php
    * Edit the .gitignore file to exclude it
    * Update each page connecting with database
* Link to each room
    * Feature them in a bullit list (chosen)
    * Feature them in a card format

## Ideas to solve problems
* Link to Each Room
    * The rooms will need a link
    * Build a button for each room link at the footer
    * Build a text link for each room at the footer
    * Build a table tree (like a directory) for each room
* Clear and Concise Rooms
    * Change the names of the rooms (titles)
    * Add a description for each room
    * Create a thumbnail image for each room
* Security for App
    * Add user authentication for the following rooms: notes, slides, subscribers and superheroes. 
    * Restrict access for notes
        * Non-authenticated users can add notes
        * Authenticated users can edit, delete, and add notes
        * All users can view notes
    * Look at Mark's demo 33 and 34
    * Look at Mark's lesson 36
* App Design
    * Create a theme with the app
    * Update styles.css and views.php 
    * Make design consistient across app
    * Create widget for dynamic slideshow
    * Look into Bootstrap templates for this purpose
* Refactoring App
    * Remove all file redundancy
    * Reduce code redundancy
    * Linke stylesheets and views.php from single file
    
# End of this document