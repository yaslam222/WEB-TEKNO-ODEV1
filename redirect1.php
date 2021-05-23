<?php

echo '
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="pstyle2.css">
<img  src="pictures/isim" width="500px" p alt="logolm">

</head>';


echo "<h1>HOŞ GELDİNİZ</h1>";

echo "<div><b>lütfen bekleyin</b> </div>";
echo "<div1><b> ana sayfa'ya yönlendirileceksiniz</b></div1>";
echo"
<div3> ".$_POST["username"]  ."</div3>

";
header( "refresh:5;url=anasayfa.html" );
exit;

?>
