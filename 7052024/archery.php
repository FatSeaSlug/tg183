<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta Tags -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="language" content="en">
<meta name="author" content="Aiden">
<meta name="keywords" content="home index">
<meta name="description" content="Homepage">

<!-- Page Title -->
<title>Homepage</title>

<!-- External Stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="media.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
</head>
<body>
<!-- Header Section -->
<header id="header">
    <nav id="navbar">
      <ul>
        <li><a href="./index.html">Home</a></li>
        <li><a href="./">Archery</a></li>
        <li><a href="#">ToAdd</a></li>
        <li><a href="#">ToAdd</a></li>
      </ul>
    </nav>
  </header>

<!-- Main Content - Welcome Section -->
<div id="welcome-section">
    <div id="welcome-section-content">
    <!-- Overlay Divs (for styling) -->
    <div class="spare-overlay"></div>
    <div class="spare-overlay"></div>
    <div class="spare-overlay"></div>
    
    <!-- Card Section -->
    <section class="card">
        <!-- Card Image -->
        <div class="card-image">
        </div>
        <?php include('./php/display_archers.php'); ?>
        <!-- Card Information -->
        <div class="card-info">


    </section> <!-- End Card Section -->
    </div> <!-- End Welcome Section Content -->
</div> <!-- End Welcome Section -->

<!-- Overlay Div (for styling) -->
<div class="spare-overlay"></div>

<!-- Footer Section -->
<div id="footer-container1">
    <footer>
    <!-- Copyright Notice -->
    <p>&copy; 2024 104561093. All rights reserved. <a href="./schedule.html">Skip</a></p>
    </footer>
</div> <!-- End Footer Container -->
</body>
</html>
