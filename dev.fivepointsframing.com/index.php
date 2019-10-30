   <?php
	  
// PHP Routing Request - Requires .htaccess mod
//RewriteEngine On
//RewriteBase /
//RewriteCond %{REQUEST_FILENAME} !-d
//RewriteCond %{REQUEST_FILENAME} !-f
//RewriteRule ^(.+)$ index.php [QSA,L]

$request = $_SERVER['REQUEST_URI'];
echo $title;
switch ($request) {
    case '/' :
        require __DIR__ . '/views/home.php';
        break;
    case '' :
        require __DIR__ . '/views/home.php';
        break;
    case '/about' :
        require __DIR__ . '/views/about.php';
        break;
    case '/custom-framing' :
        require __DIR__ . '/views/custom-framing.php';
        break;
    case '/press' :
        require __DIR__ . '/views/press.php';
        break;
    case '/contact' :
        require __DIR__ . '/views/contact.php';
        break;
        
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}

?>  

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content=<?php echo '"'.$metadesc.'"' ?>>
    <title>
    <?php echo $title; ?>
    </title>
    
  <link rel="stylesheet" href="css/fivepointsframing.css" type="text/css">
  <script>
   var _gaq = _gaq || [];
   _gaq.push(['_setAccount', 'UA-41181109-6']);
   _gaq.push(['_trackPageview']);
   (function()
   {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
   })();
  </script>
  </head>
  <body class=<?php echo('"page-'.strtolower($title).'"'); ?>>
	  
  <?php echo $content; ?>
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" ></script>
  </body>
</html>