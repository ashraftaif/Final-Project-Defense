<?php
require('../Models/db.php');
include("../Controllers/auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form">
<p>Dashboard</p>
<p>This is another secured page.</p>
<p><a href="index.html">Home</a></p>
<a href="../Controllers/logout.php">Logout</a>
</div>
</body>
</html>