<?php 
// HERE PUT BASIC SEO STUFF 

// THE PAGE TITLE
$request = $_SERVER['REQUEST_URI'];
$title = '404 '.$request.' not found';

// THE PAGE DESCRIPTION 
$metadesc = 'OOPS ¯\_(ツ)_/¯ We can\'t find '.$request;
?>

<?php // HERE PUT HTML 

	
// <img src="" alt="" /> 

// <div class=""></div>

	
$content = '
<h1 class="uk-title"> '.$title.'</h1>
<p>'.$metadesc.'</p>


';
?>