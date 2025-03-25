<?php
include 'config/database.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Workshop PDO</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #77aaff 3px solid;
        }
        header a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }
        header ul {
            padding: 0;
            list-style: none;
        }
        header li {
            float: left;
            display: inline;
            padding: 0 20px 0 20px;
        }
        header #branding {
            float: left;
        }
        header #branding h1 {
            margin: 0;
        }
        header nav {
            float: right;
            margin-top: 10px;
        }
        .exercises {
            margin: 20px 0;
            padding: 20px;
            background: #fff;
            border: #ccc 1px solid;
        }
        .exercises p {
            font-size: 18px;
            color: #333;
        }
        .exercises a {
            display: block;
            margin: 10px 0;
            color: #333;
            text-decoration: none;
        }
        .exercises a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Workshop PDO</h1>
    </header>

    <div class="container">
        <div class="exercises">
            <h2>Exercises</h2>
            <a href="request/gandalf_finder.php">Gandalf Finder</a>
            <a href="request/list_user.php">List User</a>
            <a href="request/request_user.html">Request User</a>
        </div>
    </div>
</body>
</html>