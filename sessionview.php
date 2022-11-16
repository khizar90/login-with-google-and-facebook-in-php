<?php
session_start();
// print_r($_SESSION)
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SESSION VIEW</title>
</head>
<body>
    <?php
    if(isset($_SESSION['fav color'])){
        echo $_SESSION['fav color'];
    }
    ?>
</body>
</html>