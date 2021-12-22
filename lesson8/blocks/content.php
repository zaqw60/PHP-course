<?php
if(isset($_GET['cont'])) {
    $cont = strip_tags($_GET['cont']);
}elseif (isset($_POST['cont'])) {
    $cont = strip_tags($_POST['cont']);
}
    switch ($cont) {
        case "catalog":
            require "views/catalog.php";
            break;
        case "shop":
            require "views/shop.php";
            break;
        case "card":
            require "views/card.php";
            break;
        case "registration":
            require "views/registration.php";
            break;
        case "basket":
            require "views/basket.php";
            break;
        case "reviews":
            require "views/reviews.php";
            break;
        case "rev":
            require "engine/rev.php";
            break;
        case "reg":
            require "engine/reg.php";
            break;
        case "bas":
            require "engine/bas.php";
            break;
        case "header":
            require "blocks/header.php";
            break;
        case "admin":
            require "views/admin.php";
            break;
        case "redact":
            require "engine/redact.php";
            break;
        default:
            require "views/shop.php";
    }
?>

