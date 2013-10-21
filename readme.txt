/***********************
 * Setup Instruction   *
 ***********************/

_ Create a file named config.php in folder deef cloned from config.sample.php, with updated database access
_ Change sql content in _mysqldump/np_crossword_deef.sql from 'localhost/SIMB-1304-Crossword' to 'www.crosswordclub.org'


/***********************
 *  Migrating Report   *
 ***********************/

_ Backup database and data files from old system.
_ Create a whole new database in phpmyadmin
_ Download phpBB3 and install it independently with the old system, using the new database. DO NOT OVERWRITE OLD DATA FILE AND DATABASE
_ After finish creating phpBB3 version, execute the new system in install folder (using browser), choose "Convert" tab, and choose phpBB2 option to convert.
_ Point to old database and data files, then commit. Converting tool will automatically convert and migrate suitable data from old system to new one without removing anything from old system.
_ After finishing converting, phpBB3 version will have the same data source (not database) with the old one, except the content indexing.
_ Go to Administrator Control Panel, find the "Search index" submenu and re-index it, so that search tool can work. Wait for a few minute to finish.