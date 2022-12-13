<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Press & Info</title>
    <?php wp_head();?>
  </head>
  <body>
    <!-- header section code start -->
    <header>

      <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Education</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Politics</a>
                  </li><li class="nav-item">
                    <a class="nav-link" href="#">Fashion</a>
                  </li><li class="nav-item">
                    <a class="nav-link" href="#">Weather</a>
                  </li><li class="nav-item">
                    <a class="nav-link" href="#">Movies</a>
                  </li><li class="nav-item">
                    <a class="nav-link" href="#">Sports</a>
                  </li>
                </ul>
              </div> -->
              <?php 
                  wp_nav_menu(
                    array( 
                    'theme_location' => 'primary_menu', 
                    'Menu' => 'primary_menu',
                    'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0', 
                    'container' => 'div', 
                    'container_class' => 'collapse navbar-collapse', 
                    'container_id' => 'navbarSupportedContent',

                  )
                  );
              ?>
            </div>
          </nav>
      </div>
    <!-- header section code end -->
    </header>