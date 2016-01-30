<html>
<head>
	<title>Hello world</title>
</head>
<body>

<!-- -->

<?php

/*  配列の宣言　
*/

$name = array('GON','YUYA','KAZUYA','HIRO','MIKAMI');

foreach ($name as $value ) {
	echo "the name is".$value."<br />";
}

foreach ($name as $key => $value) {
	echo $key . $value . "<br />";
}


?>	

</body>
</html>

