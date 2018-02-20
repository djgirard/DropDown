<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>Drop Down</title>
    <meta name="description" content="Drop Down">
    <meta name="author" content="Dan">
    <link rel="stylesheet" type="text/css" href="style/global.css">
</head>

<body>
    <div id="container">
        <div id="main">
<form>

    <select>
<?php
$name = 'Favorite Color';
        
$colors = array('red', 'green', 'blue');
foreach ($colors as $value) {
    echo "<option value=\"$value\">$value</option>";
}
?>
    </select>
    </form>
    </div>
    </div>
</body>
</html>