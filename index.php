<?php
// You can include PHP code here if needed
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
div{
    background-image:url("https://png.pngtree.com/thumb_back/fh260/background/20220217/pngtree-creative-simple-background-design-of-world-blood-donation-day-image_953566.jpg");
    background-repeat:no-repeat;
    background-size:cover;
}
header {
    background-color: #d9534f;
    color: #fff;
    text-align: center;
    padding: 1em;
}

header {
            background-color: #d9534f;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        nav {
            background-color: #5bc0de;
            color: #fff;
            padding: 0.5em;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            display: inline;
            margin-right: 20px;
            transition: transform 0.3s ease-in-out;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            transition: color 0.3s ease-in-out;
        }

        nav a:hover {
            color: #080807;
        }

        nav li:hover {
            transform: scale(1.1);
        }

section {
    margin: 20px;
}

footer {
    background-color: #337ab7;
    color: #fff;
    text-align: center;
    padding: 1em;
    position: fixed;
    bottom: 0;
    width: 100%;
}
marquee {
            color:red;
            font-size: 18px;
            margin-top: 10px;
        }
</style>
</head>
<body>
    <header>
        <h1>Blood Bank Management</h1>
    </header>
    <center>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="abt.html">About us</a></li>
            <li><a href="bloodtype.html">Blood Blood</a></li>
            <li><a href="hos.html">Hospital Details</a></li>
            <li><a href="adlog.html">Admin</a></li>
            <li><a href="userlog.html">Login</a></li>
        </ul>
    </nav>
</center>
<div>
    <section>
        <h2>Latest News</h2>
        <p>Stay tuned for the latest updates and news from our blood bank.</p>
    </section>
    
    <section>
        <h2>Why Donate?</h2>
        <p>Donating blood saves lives. Find out how you can make a difference today.</p>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br><br><br><br><br><br><br><br><br>
</div>
    <footer>
    <marquee behavior="scroll" direction="left">Welcome to Blood Bank Management System - Saving Lives Together!</marquee>
    </footer>
</body>
</html>
