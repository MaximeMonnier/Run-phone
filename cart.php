<?php
ob_start();
    //include header php file 
    include "header.php";
?>

<?php

    /* include carts*/ 
    include "Templates/_cart-template.php";
    /* include carts*/ 

    /* include whishliste*/ 
    include "Templates/_wishlist_template.php";
    /* include wishliste*/ 

    /* include new-phones section*/ 
    include "Templates/_new-phones.php";
    /* include new-phones section*/ 
?>

<?php
    //include footer php file 
    include "footer.php";
?>