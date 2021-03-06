<?php

/*

type: layout

name: Shop Masonry

position: 10

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = '';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<div class="nodrop safe-mode edit <?php print $layout_classes; ?>" field="layout-skin-10-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="box-container">
            <div class="" id="shop-products-conteiner">
                <div class="col-md-9">
                    <h2 class="edit page-title">Shop</h2>
                    <div class="box-container">
                        <module type="shop/products" template="skin-2" limit="18" description-length="70" data-show="thumbnail,title,add_to_cart,price"/>
                    </div>
                </div>
                <div class="col-md-3">
                    <?php include template_dir() . "layouts/shop_sidebar.php"; ?>
                </div>
            </div>
        </div>
    </div>
</div>