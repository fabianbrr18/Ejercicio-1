<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
 
  <title>Beauty_Cosmetics</title>
</head>
<body>
<?php 
require ('components/navbar.php')
?>
<nav style="background-color: #f8bbd0">

<div class="container text-white">
  <div class="row justify-content-center">

    <div class="col-md-2 dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      SKINCARE
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">Bálsamo facial</a></li>
        <li><a class="dropdown-item" href="#">Suero de Niacinamida</a></li>
        <li><a class="dropdown-item" href="#">Mascarilla de hoja Pure Essence Mask Sheet</a></li>
      </ul>
    </div>
  
  <div class="col-md-2">
  <div class=" dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      LABIOS
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">Lip Oil Ruby Fresa</a></li>
        <li><a class="dropdown-item" href="#">Bálsamo regenerador labial cereza y avellana</a></li>
        <li><a class="dropdown-item" href="#">Mascarilla de hoja Pure Essence Mask Sheet</a></li>
      </ul>
    </div>
  </div>
  <div class="col-md-2">
  <div class=" dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      PESTAÑAS
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">ETUDE - Sérum de pestañas My Lash Serum GRANDE</a></li>
        <li><a class="dropdown-item" href="#">Flash Lashes (Serum crecimiento cejas y pestañas)</a></li>
        <li><a class="dropdown-item" href="#">CATRICE SERUM CEJAS Y PESTAÑAS SUPER BOOST 6 ML</a></li>
      </ul>
    </div>
  </div>
  <div class="col-md-2">
  <div class=" dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      ACCESORIOS
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">Paquete De Esponjas Para Maquillaje Ovaladas 2 Pzas</a></li>
        <li><a class="dropdown-item" href="#">Diadema Panda Maquillaje Lavado Facial Banda Para El Cabello</a></li>
        <li><a class="dropdown-item" href="#">Brocha para Maquillaje Líquido Mary Kay</a></li>
      </ul>
    </div>
  </div>
  <div class="col-md-2">
  <div class=" dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      CUIDADO CAPILAR
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">Shampoo Vita Sané Control Plus</a></li>
        <li><a class="dropdown-item" href="#">Polímero Capilar Vita Sané</a></li>
        <li><a class="dropdown-item" href="#">Vegan Keratin Collagen Shampoo x 1000 ml</a></li>
      </ul>
    </div>
  </div>
    
  </div>
</div>
</nav>


<main>
  <div class="container mt-2">
    <div class="rounded-3 w-25" style="background-color:#f8bbd0;">
      <h2 class="ps-2 fs-2 text-white" >
        Nuestros servicios
      </h2>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="./assets/salon-thread-eyebrow-threading-image.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Cejas</p>
              <div class="">
              <p class="d-inline" >Lorem ipsum dolor, sit amet consectetur adipisicing</p>
             
              </div>
            </div>
        </div>
        
    </div>
    <div class="col-md-4">
      <div class="card h-100" style="width: 18rem;">
        <img src="./assets/AdobeStock_228887602-1080x675.jpg" class="card-img-top " alt="...">
          <div class="card-body">
            <p class="card-text">Maquillaje a domicilio</p>
            <div class="">
            <p class="d-inline" >Lorem ipsum dolor, sit amet consectetur adipisicing</p>
           
            </div>
          </div>
      </div>
      
  </div>
  <div class="col-md-4">
    <div class="card" style="width: 18rem;">
      <img src="./assets/salon-thread-eyebrow-threading-image.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">CEJAS</p>
          <div class="">
          <p class="d-inline" >Lorem ipsum dolor, sit amet consectetur adipisicing</p>
         
          </div>
        </div>
    </div>
    
</div>
    
  </div>
 
</main>

<?php 
require ('components/footer.php')
?>

	

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>