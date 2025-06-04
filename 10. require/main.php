<?php
include 'config.php'; // Includes the file, if the file or the variable is not present then the code still runs with some error messages and warnigns.

require 'config.php'; // Includes the file, if the file or the variable is not present then the code does not executes.

include_once 'config.php'; // Will include the code/file or the variables only once, if not present, will display the error messages and warning but the code still runs

require_once 'config.php'; // Will include the code/file or the variables only once, if not present, the code does not executes.

// Use them according to the need,
// Mostly required are used for codes that are much more important in order to execute the program.

echo "\nThe database host is $dbHost and the databse user is $dbUser.\n";