<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right')?>CleanerPROMAXX</title>

    <?php
        wp_head(); 
    ?>
    
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        
</head>
<body>

    
    <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <div class="custom-logo">
          <?php if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
              }
          ?>
        </div>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="http://cleanwordpress.cz" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="http://cleanwordpress.cz/wp-admin/" class="nav-link px-2 text-white">Admin</a></li>
          <li><a href="http://cleanwordpress.cz/fred-je-zirafa/" class="nav-link px-2 text-white">Fred</a></li>
          <li><a href="http://cleanwordpress.cz/2022/03/11/sloni-alfasamec/" class="nav-link px-2 text-white">Alfasamec</a></li>
          <li><a href="http://cleanwordpress.cz/category/vypis-prispevku/" class="nav-link px-2 text-white">Vypis prispevku</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-danger">Sign-up</button>
        </div>
      </div>
    </div>
  </header>

  <?php the_post_thumbnail(); ?>
