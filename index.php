<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootdtrsap/jquery.js"></script>
</head>
<body>

<!--navbar-->
<nav class="navbar navbar-expand-lg fixed-top" style="background:linear-gradient(69.66deg, #00C1FE 19.39%, #000000 96.69%);" data-bs-theme="Dark">
  <div class="container">
    <a class="navbar-brand"><img src="img/asavan.png"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php?h=beranda">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php?h=datakasir">Data Kasir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php?h=datamenu">Data Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php?h=pemesanan">Pemesanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php?h=laporan">Laporan</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

  <!--Container-->
  <div class="container pt-5 mt-5">

    <!--Content-->
    <?php
      switch (@$_GET['h'])
      {
        case 'beranda':
          # code...
          require "beranda.php";
          break;

        case 'datakasir':
          # code...
          require "datakasir.php";
          break;

        case 'tambahkasir':
          # code...
          require "tambahkasir.php";
          break;

        case 'editkasir':
          # code...
          require "editkasir.php";
          break;

        case 'hapuskasir':
          # code...
          require "hapuskasir.php";
          break;
        
        default:
          # code...
          require "beranda.php";
          break;
      }
    ?>
  </div>

  <!--Footer-->
  <div class="fixed-bottom d-flex py-2" style="background:linear-gradient(69.66deg, #00C1FE 19.39%, #000000 96.69%);">
  <div class="container">
      <span class="text-center align-center">
        <p style="color:white">Copyright &copy; <?php echo date ('Y'); ?> Asavan <b>Resto</b></p>
      </span>
    
  </div>
  </div>
</body>
</html>