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
    <?php
    echo "<pre>", print_r($_POST, true), "<pre>";
    
    if (isset($_POST['submit'])) {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        
        $to = 'daniel_girard@emerson.edu';
        $subject = 'New Form Results';
        $message = "Someone has filled out the form.\n\n"
                    . "Name: $name Password: $password\n\n";
        $result = mail ($to, $subject, $message);
        
        //Connect to Database
        $hostname = 'localhost';
        $username = 'danielgi_dgirard';
        $password = '912DanGirard!';
        $database = 'danielgi_userform';
        
        $mysqli = new mysqli($hostname, $username, $password, $database);
        
        if ($mysqli->connect_errno){
            echo "<p>MySQL Error" . $mysqli->error;
        } else {
            echo 'database connection successful';
        }
    }
    ?>
    
    <form method="post">
        Name: <input type="text" name="name"><br>
        Password: <input type="text" name="password"><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    
  
</body>