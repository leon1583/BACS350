# Code Plan
* This documen shows what code I need to implement into the structure of the app
* The plan includes refactoring code so I don't have redundancy
* A lot of time will be invested into this

## Structure of Document
* First, I will describe file structure
* Then I will show the code that needs to be added
* Finally, I will show the code that needs refactoring

# Planned File Structure
* Root Directory: /public_html/bacs350
* "Room" 1- Documents: /public_html/bacs350/docman
* "Room" 2- Notes: /public_html/bacs350/notes
* "Room" 3- Slides: /public_html/bacs350/slides
* "Room" 4- Planner: /public_html/bacs350/planner
* "Room" 5- Reviewer: /public_html/bacs350/review
* "Room" 6- Subscribers: /public_html/bacs350/subscribers
* "Room" 7- Superheroes: /public_html/bacs350/superhero

## File Structure Changes
* Clean up homepage to point to simple rooms
* Create a hidden folder in /public_html/bacs350 for stylesheets
     * Move style.css and views.php into folder
     * Point all documents to single file under the folder
     * Folder name: style
     
## Database Information
* Clean up database information to reduce redundancy
* Create a hidden folder in /public_html/bacs350 for database information
    * Move secret_settings.php into folder
    * Move the .sql documents into single database folder (SQL documentation of database commands & structure)

## Photographs (done)
* Move all pictures into single folder
* Make hidden folder in /public_html/bacs350
    * Update code to point to photos in new location
    
# Needed Code
* Need to add code for completing the project
* Code that needs to be added:
    * secret_settings to other databases
    * authentication code for site
    * refactored code
    
## Secret Settings
* Create secret_settings.php in a centeral location
* Use the secret_settings template to update database credentials
* Example:
    * for db.php: require_once secret_settings.php;
    * in screet_settings:
        $dbname = '...';
        $username = '..._###';
        $password = '&&&&';
        $port = '####';
        $host = "localhost:$port";

## Authentication code
* Need to implement authentcation for different rooms in the app
* Preferbaly Subscribers and Superheroes
* Need to create auth.php in a centeral location
* For index.php: "require_once auth.php;"
* For auth.php: 
        ---code---

## Refactoring Code
* Point all needed files to single location
* Files that are needed in single location:
    * views.php
    * style.css
    * secret_settings.php
    * auth.php
* Referring to files from absolute location:
    * Use this code: 
        require_once(__DIRECTORY__.'/name.php');
    * Example:
        require_once(ffm/public_html/secretfolder/name.php');
        
# End of Coding Document