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
<div class="container mt-4">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./assets/sublime.jpg" class="d-block " alt="img1" style="height: 400px; width: 1200px;">
    </div>
    <div class="carousel-item">
      <img src="./assets/cosmetic.jpg" class="d-block " alt="img2" style="height: 400px; width: 1200px;">
    </div>
    <div class="carousel-item">
      <img src="./assets/sombras-liquidas-atemporal-e1642352355783.jpg" class="d-block " alt="img3" style="height: 400px; width: 1200px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <div class="" style="background-color: #f3e5f5;">
    <p class="mt-2" >
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente aperiam ex est dolor quidem dolorum excepturi expedita eligendi eius nobis distinctio id ipsa deserunt ullam, et adipisci! Enim, eveniet eaque.
      Odio iste dolores voluptatibus accusamus! Voluptates deserunt similique corporis veritatis ex, eveniet dicta. Minima omnis repellendus eaque reiciendis vel atque ut velit! Corrupti temporibus culpa porro cupiditate accusamus? Officiis, vero!
      Facere, quas ut quasi reprehenderit, ipsa laboriosam itaque omnis perferendis eaque veritatis possimus culpa at minima? Iusto hic laborum consequuntur voluptates ea asperiores fugiat, quod magnam non quam nisi quia.
      Quis hic facilis necessitatibus rerum. Voluptates nobis, quam odio facilis quas vero saepe nesciunt tempora asperiores aspernatur incidunt provident, voluptate eaque delectus commodi ipsam magnam tenetur? Cum distinctio aperiam exercitationem.
      Officia quis aliquam nihil odit adipisci saepe velit, laudantium eius consequatur architecto sequi. Reiciendis animi illo est, consequatur non, unde, quia excepturi quae nisi neque debitis ab doloremque. Asperiores, laudantium.
    </p>
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