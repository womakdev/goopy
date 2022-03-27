<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="icon" href="./assets/image/favicon-32x32.png" type="image/gif" sizes="32x32">
  <link rel="shortcut icon" href="./assets/image/favicon-32x32.png" type="image/gif" sizes="32x32">
  <link rel="apple-touch-icon" href="./assets/image/apple-touch-icon.png" type="image/gif">
  <!-- Google Font CDN -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
  integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- Main CSS -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Goopy : Upload your file</title>
</head>

<body>

  <div class="dashboard">
    <div class="top-menu">
      <a href="#" class="dashboard-item">
        <i class="fas fa-home"></i>
      </a>

      <a href="#" class="dashboard-item">
        <i class="fas fa-download"></i>
      </a>

       <a href="#" class="dashboard-item">
        <i class="fab fa-discord"></i>
      </a>

      <a href="#" class="dashboard-item">
        <i class="fab fa-paypal"></i>
      </a>
    </div>

    <div class="bottom-menu">
     

      <a href="#" class="dashboard-item">
        <i class="fas fa-user"></i>
      </a>
    </div>
  </div>

  <header>
    <div class="container-fluid">
      <div class="navbar">
        <a href="#" class="navbar-brand"><img src="assets/image/logo.png"  alt=""></a>

        <div class="nav-menu">
          <div class="search-section">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Search" />
            <i class="fas fa-times-circle"></i>
          </div>

          <div class="lang-section" onmouseover="langsin()">
            <div class="langs p-3" id="langmenu" onclick="langsout()">
              <p><a href="url.html">Français</a></p>
              <p><a href="url.html">English</a></p>
              <p><a href="url.html">Spanish</a></p>
              <p><a href="url.html">Chinois</a></p>
              <p><a href="url.html">Russe</a></p>
            </div>
            <img src="assets/image/translate.png" alt="#">
            <i class="fas fa-chevron-down"></i>
          </div>
        </div>
      </div>
    </div>
  </header>