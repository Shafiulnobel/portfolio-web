<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/portfolio/config.php');

use Bitm\Products;

$_product = new Products();
$products = $_product->getVideos();

// var_dump($products);
?>
<section class=" videos text-center text-light">

  <div class="text-center link pb-5">
    <h1 style="font-size: 5rem">Videos</h1>
    <button style="background-color: #dc1b20; border-radius: 0" type="button" class="btn border border-0">
      <a class="text-decoration-none text-light" target="_blank" href="https://www.youtube.com/channel/UCekNSWpz_agCnsv6TZaduMg">See Videos <i class="fa-solid fa-chevron-right"></i></a>
    </button>
  </div>
  <div class="">
    <img src="images/thumbnail.jpg" width="100%" alt="" />
  </div>

  <!-- slider start -->
  <div class="container text-center my-3">
    <div class="row mx-auto my-auto justify-content-center">
      <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">


          <?php
          $_active = 'active';
          foreach ($products as $product) :
          ?>


            <div class="carousel-item <?= $_active ?>">
              <div class="col-md-3 ">
                <div class="card">
                  <iframe width="100%" height="162" src="<?= $product['link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
              </div>
            </div>
            <!-- <div class="carousel-item">
                  <div class="col-md-3">
                    <div class="card">
                      <iframe
                        width="100%"
                        height="162"
                        src="https://www.youtube.com/embed/vsw-SsljHJ0"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                      ></iframe>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-md-3">
                    <div class="card">
                      <iframe
                        width="100%"
                        height="162"
                        src="https://www.youtube.com/embed/_zCxlGC1MS8"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                      ></iframe>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-md-3">
                    <div class="card">
                      <iframe
                        width="100%"
                        height="162"
                        src="https://www.youtube.com/embed/1vExyOU8isI"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                      ></iframe>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-md-3">
                    <div class="card">
                      <iframe
                        width="100%"
                        height="162"
                        src="https://www.youtube.com/embed/L-su8fvRbko"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                      ></iframe>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-md-3">
                    <div class="card">
                      <iframe
                        width="100%"
                        height="162"
                        src="https://www.youtube.com/embed/F4_IcLA_DaQ"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                      ></iframe>
                    </div>
                  </div>
                </div> -->

          <?php
            $_active = '';
          endforeach;
          ?>
        </div>
        <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
    </div>
  </div>
  <!-- slider end -->
</section>