<?php
//require_once "../public_html/admin/inc/connect.php";
?>
<?php
/*
This file contains the database access information.
This file also establishes a connection to MySQL,
selects the database, and sets the encoding.
*/

# Set the database access information as constants:
$servername = "localhost";
$username = "root";
$pass = "";
$db = "teamgold";

# Make the connection:

$connect = mysqli_connect($servername, $username, $pass, $db) OR die('Could not connect to MySQL: ' . mysqli_connect_error() );

mysqli_set_charset($connect, 'utf8'); // Set the encoding

//date_default_timezone_set('Africa/Lagos'); // Default timezone

/*
Alternative connection metheod
$conn = mysqli_connect('localhost', 'omokolade', 'Afritech12.');
mysqli_select_db($conn,'vdoc_testing');
date_default_timezone_set('Africa/Lagos');
*/
