<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/portfolio/config.php');

use Bitm\Products;

$_product = new Products();
$products = $_product->getThumbnail();


?>

<section class="thumbnail text-center text-light">

        <h1 style="font-size: 5rem">Thumbnail</h1>
        <button
        style="background-color: #dc1b20; border-radius: 0"
        type="button"
        class="btn border border-0"
      >
        <a
          class="text-decoration-none text-light"
          target="_blank"
          href="https://www.youtube.com/channel/UCekNSWpz_agCnsv6TZaduMg"
          >See More <i class="fa-solid fa-chevron-right"></i
        ></a>
      </button>
        <div class="thumbnail-inside"> 
          <div class="box">
            <?php 
            $_count = 1;
            foreach($products as $product):
            ?>
            <span style="--i:<?=$_count?>;"><img src="<?=$product['link']?>" alt=""></span>
        <!--     <span style="--i:2;"><img src="https://i.ibb.co/z5k48dW/thumb-1.jpg" alt=""></span>
            <span style="--i:3;"><img src="https://i.ibb.co/qgWYgM5/thumb-2.jpg" alt=""></span>
            <span style="--i:4;"><img src="https://i.ibb.co/PNzhXPv/thumb-3.jpg" alt=""></span>
            <span style="--i:5;"><img src="https://i.ibb.co/z5k48dW/thumb-1.jpg" alt=""></span>
            <span style="--i:5;"><img src="https://i.ibb.co/qgWYgM5/thumb-2.jpg" alt=""></span>
            <span style="--i:7;"><img src="https://i.ibb.co/h9GTfqV/thumb.jpg" alt=""></span>
            <span style="--i:8;"><img src="https://i.ibb.co/PNzhXPv/thumb-3.jpg" alt=""></span> -->
            
          <?php 
          $_count++;
          endforeach;
          ?>  
        </div>
        </div>
      
      </section>
    