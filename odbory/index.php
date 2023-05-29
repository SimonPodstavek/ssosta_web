<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Súkromná stredná odborná škola, ul 29. augusta 4812, 058 01 Poprad</title>
    <link rel="stylesheet" href="styles/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <?php
    include '../header/index.php';
  ?>

<div style="background-color: #dedede;">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="padding:10px;">
          <li class="breadcrumb-item"><a href="https://simonpodstavek.studenthosting.sk/ssosta/">Domov</a></li>
          <li class="breadcrumb-item"><a href="https://simonpodstavek.studenthosting.sk/ssosta/">O škole</a></li>
          <li class="breadcrumb-item active" aria-current="page">Odbory</li>
        </ol>
      </nav>
  </div>

<div class="d-flex text-center justify-content-center" style="margin:20px;">
    <div class="card" style="width: 50vw;">
    <img src="../img/it.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Informačné technológie</h5>

        <h5 class="card-title" style="margin-top:5%">Naplnenosť prváckej triedy</h5>  
          <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="margin: 0 5% 5% 5%;">

          <div class="progress-bar" style="width: 95%;">95%</div>
        </div>
        <p class="card-text">

        Jedinečnosť študijného odboru :  spojením predností gymnázií ( dobrý základ matematiky, fyziky ) a priemysloviek, SOŠ ( dobrý základ odborných predmetov ) získava absolvent tohto odboru výhodu pri ďalšom štúdiu na VŠ pred absolventmi gymnázií, priemysloviek, SOŠ. Ako jediný študijný odbor v SR ponúka možnosť spojeného štúdia počítačových sietí, spracovania grafiky na PC a základov robotiky, čím sú absolventi lepšie uplatniteľní v praxi, pretože majú vedomosti z viacerých IT oblastí. V odborných predmetoch je implementovaný medzinárodný NetAcad program so zameraním na počítačové siete, v ktorom absolventi po ukončení získajú medzinárodné Cisco certifikáty. Veľký dôraz je kladený na štúdium cudzích jazykov a preto dopoludnia v predmete AJ je implementované Cambrigde štúdium s možnosťou získania medzinárodných Cambrigde certifikátov priamo u nás na škole.</p>
    </div>
    </div>

</div>

<nav aria-label="navigation" style="margin-bottom:20px;">

<div class="d-flex text-center justify-content-center pagination">
    <div class="row d-flex pagination" style="width:93vw;">
      <div class="col-md-4 col-sm-12">
      <li class="page-item"><a class="page-link " href="pravo.php">Právo a podnikanie</a></li>
      </div>
      <div class="col-md-4 col-sm-12">
      <li class="page-item"><a class="page-link fw-bolder" href="index.php">Informačné technológie</a></li>
      </div>
      <div class="col-md-4 col-sm-12">
      <li class="page-item"><a class="page-link " href="idt.php">Inteligentné technológie</a></li>
      </div>
    </div>
  </div>
</nav>



<?php
include_once '../footer/footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>