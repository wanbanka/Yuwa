<?php

session_start();

$time = microtime();

$_SESSION = array();

session_destroy();

$time2 = microtime();

$final = ($time2 - $time);

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="<?php echo $final; ?> ; index.php">
    <title>Document</title>
</head>
<body>
    
</body>
</html>