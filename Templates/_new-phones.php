<?php
    shuffle($product_shuffle);
?>       
       
       <!-- New phones -->
        <section id="new-phones">
            <div class="container">
                <h4 class="font-robo font-size-20">Nouveaux Téléphones 2022</h4>
                <hr>

                 <!-- Owl-caroussel -->
                 <div class="owl-carousel owl-theme">
                 <?php foreach ($product_shuffle as $item) { ?>
                    <div class="item py-2 bg-light">
                        <div class="product font-mont">
                            <a href="#"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"  ?>"
                                    alt="product1"
                                    class="img-fluid"></a>
                            <div class="text-center">
                                <h6><?php echo $item['item_name'] ?? "Unknow" ?></h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$<?php echo $item['item_price'] ?? "Unknow" ?></span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Ajouter au Panier</button>
                            </div>
                        </div>
                    </div>
                    <?php } //closing foreach loupe ?>
                </div>
                <!-- !Owl-caroussel -->

            </div>
        </section>
        <!-- !New phones -->