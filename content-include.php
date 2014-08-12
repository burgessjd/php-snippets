
// used to insert and swap content includes using query string variables in hyperlinks


<ul class="php-menu">
<li><a href="/snippets/php-includes.php">Home</a></li>
<li><a href="/snippets/php-includes.php?pg=one">Include One</a></li>
<li><a href="/snippets/php-includes.php?pg=two">Include Two</a></li>
<li><a href="/snippets/php-includes.php?pg=three" class="last">Include Three</a></li>
</ul>




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
