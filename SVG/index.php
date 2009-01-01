<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta content="text/html; charset=ISO-8859-2" http-equiv="content-type">
<title>SVG</title>
<meta content="michalus" name="author">
<meta content="Dir" name="description">
<meta name="robots" content="noindex, nofollow">
<style type="text/css">
body {
	background: white;
	margin: 1em 2em 1em 2em;
	color: black;	
}
ul {
	line-height: 2em;
}
</style>
</head>
<body>

<ul>

<?
  //define the path as relative
  $path = ".";

  //using the opendir function
  $dir_handle = @opendir($path) or die("Unable to open $path");

  //make string with 70 spaces
  $space=" ";

  //running the while loop

  while ($file = readdir($dir_handle)) {

  // filename - output left-justified

  if ((is_file($file)) && ($file!="index.php")) {
    $t="<a href=$file>$file</a>";    

    $fs=(filesize($file)/1024);
    $fs=sprintf("%01.2f",$fs)."kb ";

    $fd=date("d.M Y H:i:s", filemtime($file));

    $file_link = str_replace(" ", "%20", $file);

    echo "<li><a href=$file_link title=\"modyfikowany: $fd, rozmiar: $fs\">$file</a></li>";
    
  
  }
  }
  //closing the directory
  closedir($dir_handle);  
  ?>

</ul>

</body></html>