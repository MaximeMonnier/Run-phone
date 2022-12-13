<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['delete-cart-submit'])){
        $deleterecord = $Cart->deleteCart($_POST['item_id']);
    }
}

?>            
        
        
        <!-- Shopping cart section  -->
        <section id="cart" class="py-3">
            <div class="container-fluid w-75">
                <h5 class="font-mont font-size-20">Votre liste de souhaits</h5>

                <!--  shopping cart items   -->
                    <div class="row">
                        <div class="col-sm-9">
                            <?php
                                
                                foreach ($product->getData('cart') as $item) :
                                    $cart = $product->getProduct($item['item_id']);
                                    $subTotal[] = array_map(function ($item){
                            ?>
                            <!-- cart item -->
                                <div class="row border-top py-3 mt-3">
                                    <div class="col-sm-2">
                                        <img src="<?php echo $item ['item_image'] ?? "./assets/products/1.png" ?>" alt="cart1" class="img-fluid">
                                    </div>
                                    <div class="col-sm-8">
                                        <h5 class="font-mont font-size-20"><?php echo $item ['item_name'] ?? "Unknow" ?></h5>
                                        <small>Par <?php echo $item ['item_brand'] ?? "Brand" ?></small>
                                        <!-- product rating -->
                                        <div class="d-flex">
                                            <div class="rating text-warning font-size-12">
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                              </div>
                                              <a href="#" class="px-2 font-robo font-size-14">20,534 Votes</a>
                                        </div>
                                        <!--  !product rating-->

                                        <!-- product qty -->
                                            <div class="qty d-flex pt-2">
                                                <form method="post">
                                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0 ; ?>" name="item_id">
                                                <button type="submit" name="delete-cart-submit" class="btn font-mont text-danger px-0 border-right">Suprimer</button>
                                                </form>
                                                <button type="submit" class="btn font-mont text-danger">Ajouter au panier</button>
                                            </div>
                                        <!-- !product qty -->

                                    </div>

                                    <div class="col-sm-2 text-right">
                                        <div class="font-size-20 text-danger font-robo">
                                            $<span class="product_price" data-id ="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?></span>
                                        </div>
                                    </div>
                                </div>
                            <!-- !cart item -->
                            <?php 
                            return $item['item_price'];
                                },$cart);//closing arry_map function
                                endforeach; 
                            ?>
                        </div>
                    </div>
                <!--  !shopping cart items   -->
            </div>
        </section>
    <!-- !Shopping cart section  -->