<?php
$phones = [
  [
    'name' => 'Samsung Galaxy Note 20 Ultra',
    'img_url' => 'https://i.insider.com/5f3d372d42f43f001ddfdbc8?width=700',
    'rate' => '5',
    'brand' => 'Samsung',
    'price' => 'JOD 759.00',
    'is_out_of_stock' => '1'
  ],
  [
    'name' => 'INFINIX Zero 8',
    'img_url' => 'https://mobileleb.com/cdn/shop/products/infinix-mobile-phone-infinix-zero-8-8gb-128gb-6-85-inch-ips-lcd-90hz-screen-octa-core-cpu-rear-cam-quad-64mp-8mp-2mp-2mp-quad-led-flash-selfie-cam-dual-48mp-8mp-fingerprint-side-mount_79c4f3ac-3bea-40cd-bb1f-779d512c5e47_600x600.jpg?v=1666176302',
    'rate' => '0',
    'brand' => 'Infinix',
    'price' => 'JOD 205.00',
    'is_out_of_stock' => '1'
  ],
  [
    'name' => 'Apple iPhone 12 Pro',
    'img_url' => 'https://m.media-amazon.com/images/I/41kJqphB5iL.jpg',
    'rate' => '0',
    'brand' => 'Apple',
    'price' => 'JOD 973.00',
    'is_out_of_stock' => '1'

  ],
  [
    'name' => 'ITEL A48',
    'img_url' => 'https://bnewmobiles.com/cdn/shop/products/4_5fdb31c1-ad81-44b3-907b-17672c76d3e8_1200x1200.jpg?v=1645271528',
    'rate' => '0',
    'brand' => 'iTel',
    'price' => 'JOD 66.00'
  ],
  [
    'name' => 'Samsung Galaxy S21 Ultra',
    'img_url' => 'https://cdn.shortpixel.ai/spai/q_glossy+ret_img+to_webp/mobizil.com/wp-content/uploads/2021/01/S21-Ultra-5G.jpg',

    'rate' => '0',
    'brand' => 'Samsung',
    'price' => 'JOD 799.00'
  ],

  [
    'name' => 'Galaxy A52',
    'img_url' => 'https://m.media-amazon.com/images/I/71xKPRBWuNL.jpg',
    'rate' => '0',
    'brand' => 'Samsung',
    'price' => 'JOD 267.00'
  ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mobile Phone | Orange Jordan E shop</title>
  <!-- Copyright © 2014 Monotype Imaging Inc. All rights reserved -->
  <link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/orange-helvetica.min.css" rel="stylesheet" integrity="sha384-ARRzqgHDBP0PQzxQoJtvyNn7Q8QQYr0XT+RXUFEPkQqkTB6gi43ZiL035dKWdkZe" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-Di/KMIVcO9Z2MJO3EsrZebWTNrgJTrzEDwAplhM5XnCFQ1aDhRNWrp6CWvVcn00c" crossorigin="anonymous">
</head>
<style>
  .card {
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    width: 100%;
    height: 60vh;
    padding: 16px;
    margin: 16px;
    text-align: center;
    display: flex;
    
  }

  .badge {
    background-color: black;
    color: orange;
    border-radius: 50%;
    padding: 8px;
    position: absolute;
    top: 4rem;
    right: 16px;
    font-size: 14px;
  }

  .product-title {
    font-size: 18px;
    font-weight: bold;
    margin: 16px 0 8px;
  }

  .stars {
    color: #FFD700;
    margin: 8px 0;
  }

  .product-image {
    max-width: 100%;
    height: 30vh;
  }

  .price-old {
    text-decoration: line-through;
    color: gray;
    margin-right: 8px;
  }

  .price-new {
    color: orange;
    font-size: 24px;
    font-weight: bold;
  }

  .tax {
    color: gray;
    font-size: 14px;
  }

  .button {
    background-color: orange;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 12px 24px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 16px;
    text-decoration: none;
    display: inline-block;
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://boosted.orange.com/docs/5.1/assets/brand/orange-logo.svg" width="50" height="50" role="img" alt="Boosted" loading="lazy">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-primary" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <section style="display: flex;">

    <?php
    for ($i = 0; $i < count($phones); $i++) :
    ?>
      <div class="card">
        <div class="badge">5G</div>
        <div class="product-title"><?php echo $phones[$i]['name']; ?></div>
        <div class="stars">★★★★★ (<?php echo $phones[$i]['rate']; ?>)</div>
        <img src="<?php echo $phones[$i]['img_url']; ?>" alt="<?php echo $phones[$i]['name']; ?>" class="product-image">
        <div>
          <span class="price-old"></span>
          <span class="price-new"><?php echo $phones[$i]['price']; ?></span>
          <div class="tax">With Tax</div>
        </div>
        <a href="#" class="button">View Details</a>
      </div>
    <?php
    endfor;
    ?>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/js/boosted.bundle.min.js" integrity="sha384-5thbp4uNEqKgkl5m+rMBhqR+ZCs+3iAaLIghPWAgOv0VKvzGlYKR408MMbmCjmZF" crossorigin="anonymous"></script>
</body>

</html>
