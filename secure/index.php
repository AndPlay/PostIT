<?php
session_start();

include 'system/reference.php';

$title = "PostIT | " . $_SESSION['user'];

$perm = getPerm();

$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;

global $group;
if (isset($_GET['group'])) {
	$group = $_GET['group'];
} else {
	$group = 0;
}
?>
 
<html>
<head>
<meta charset="utf-8">
<link href='//fonts.googleapis.com/css?family=Ubuntu&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu+Mono:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css">
<title><?=$title?></title>
</head>
<body>
<div id="menu"><div class="menuentry"><a href="index.php?group=0" class="menulink">Domov</a></div><div class="menuentry"><a href="groups.php"  class="menulink">Skupiny</a></div><div class="menuentry">Účet</div><div class="menuentry"><a href="#footer" class="menulink">Koniec</a></div></div>
<div id="main">
<?php include 'posts.php'; ?>
</div>

<div id="footer">
Licensed under LGPL v3(See <a href="https://postit.d3add3d.tk/LICENSE">LICENSE</a> and <a href="https://postit.d3add3d.tk/LICENSE.lesser">LICENSE.lesser</a> files) by D3add3d | 
<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$finish = $time;
$total_time = round(($finish - $start), 4);
echo 'Page generated in '.$total_time.' seconds.';
?> | Source code can be viewed on GitHub(excluding security files).<br><a href="#menu">Go to top.</a></div>

</body>
</html>