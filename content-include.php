
// used to insert and swap content includes using query string variables in hyperlinks

<?php

if (isset($_GET['pg']) && $_GET['pg'] != "") {
	
$pg = $_GET['pg'];

if (file_exists('includes/'.$pg.'.php')) {
	
@include ('includes/'.$pg.'.php');

} elseif (!file_exists('includes/'.$pg.'.php')) {

echo 'Page you are requesting does not exist';

}

} else {

@include ('includes/home.php');

}

?>