<?php

/**
 * class.model.logout.php
 *
 * The purpose of the file is to log out users and send them back to the homepage it uses the session destroy method.
 *
 * PHP version 5.3
 *
 * @author  Original Author <n3266475@live.tees.ac.uk>
 * @version SVN:1.0
 */
	session_start();
	session_destroy(); 
    unset($_SESSION['id']);

    unset($_SESSION["firstN"]);
	unset($_SESSION["lastN"]);


?>