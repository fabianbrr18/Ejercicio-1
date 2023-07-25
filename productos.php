<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Document</title>

</head>
<body>
<?php 
require ('components/navbar.php')
?>
<main>
    <div class="container">
        <div class="mt-2">
            <div class="rounded-3 w-25" style="background-color:#f8bbd0;">
              <h2 class="ps-2 fs-3 text-white">MAS VENDIDOS</h2>
            </div>
            
            <div class="row">
              <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="./assets/índice.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">MACQUEEN - Bálsamo facial Collagen Vita Wrinkle Multi Balm</p>
                      <div class="">
                      <p class="d-inline" >$89.700</p>
                      <a href="" class="btn text-white ms-5 d-inline" style="background-color: #f8bbd0;">
                        <i class="bi bi-cart2"></i>
                        Comprar
                      </a>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="card h-100" style="width: 18rem;">
                  <img src="./assets/CapturadePantalla2020-07-30ala_s_5.02.36p.m._8646c803-88cd-40f9-b86d-cfad40420826_540x.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Lip Oil Ruby Fresa</p>
                      <div class="">
                      <p class="d-inline" >$15.000</p>
                      <a href="" class="btn text-white ms-5 d-inline" style="background-color: #f8bbd0;">
                        <i class="bi bi-cart2"></i>
                        Comprar
                      </a>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card h-100" style="width: 18rem;">
                  <img src="./assets/176506-800-auto.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Suero de Niacinamida</p>
                      <div class="">
                      <p class="d-inline" >$45.300</p>
                      <a href="" class="btn text-white ms-5 d-inline" style="background-color: #f8bbd0;">
                        <i class="bi bi-cart2"></i>
                        Comprar
                      </a>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-md-4 mt-2">
                <div class="card" style="width: 18rem;">
                  <img src="./assets/XXL_p0068738689.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Mascarilla de hoja Pure Essence Mask Sheet</p>
                      <div class="">
                      <p class="d-inline" >$15.600</p>
                      <a href="" class="btn text-white ms-5 d-inline" style="background-color: #f8bbd0;">
                        <i class="bi bi-cart2"></i>
                        Comprar
                      </a>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-md-4 mt-2">
                <div class="card" style="width: 18rem;">
                  <img src="./assets/179382-1600-1600.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Paquete De Esponjas Para Maquillaje Ovaladas 2 Pzas</p>
                      <div class="">
                      <p class="d-inline" >15.200</p>
                      <a href="" class="btn text-white ms-5 d-inline" style="background-color: #f8bbd0;">
                        <i class="bi bi-cart2"></i>
                        Comprar
                      </a>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-md-4 mt-2">
                <div class="card h-100" style="width: 18rem;">
                  <img src="./assets/shampoo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Shampoo Vita Sané Control Plus</p>
                      <div class="">
                      <p class="d-inline" >$40.000</p>
                      <a href="" class="btn text-white ms-5 d-inline" style="background-color: #f8bbd0;">
                        <i class="bi bi-cart2"></i>
                        Comprar
                      </a>
                      </div>
                    </div>
                </div>
              </div>
              
            </div>

    </div>

</main>

<?php 
require ('components/footer.php')
?>
</body>
</html>