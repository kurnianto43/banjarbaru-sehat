<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Banjarbaru Sehat</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script> 
</head>
<body>

    <div id="main" class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="?page=home">BANJARBARU<span style="color: #28a745">SEHAT</span>.COM</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="?page=home">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=profil">Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=buku_tamu">Buku Tamu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=peta_situs">Peta Situs</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
          <!-- end of navbar -->
        </nav>
        
        <?php
            if(isset($_GET['page'])){
             $page=$_GET['page'];
             $halaman="$page.php";
            if(!file_exists($halaman) || empty($page)){
                include "home.php";
              }else{
                include "$halaman";
              }
            }else{
              include "home.php";
            }
              ?>

        <!-- Footer -->
        <footer>
            <div class="row">
              <div style="margin-bottom: 30px; margin-top: 30px" class="col-md-12">
                <small>© 2019 Copyright: Dyah Dwi Handayani</small>
              </div>
            </div>
        </footer>
        <!-- Footer -->

    <!-- end of container -->    
    </div>
    
</body>
</html>