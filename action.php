<html>
<head><title>Demo</title></head>

<body>
<h1><?php echo $_GET["n"]; ?><h1>
<?php 
$a = $_GET['n'];
$b = str_replace(' ', '-', $a);
// $b = rawurlencode($a);
$c = "http://localhost/php-project/festival/index.php?n=".$b;
?>

<a href="<?php echo $c;?>"><?php echo $c; ?></a>

</body>
</html>