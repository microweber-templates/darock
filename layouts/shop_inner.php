<?php include TEMPLATE_DIR . "header.php"; ?>

<div class="edit" rel="content" field="darock_content">
    <section id="content" class="nodrop">
        <div class="container" id="shop-container">
            <div class="box-container">

                <div>
                    <div class="shop-product-row">
                        <div class="mw-col" style="width:65%">
                            <div class="mw-col-container">
                                <module type="pictures" rel="content" template="skin-2"/>
                            </div>
                        </div>
                        <div class="mw-col" style="width:35%">
                            <div class="mw-col-container">
                                <h2 class="edit page-title" field="title" rel="content">Shop</h2>
                                <module type="sharer" id="shop-inner-sharer"/>
                                <div class="product-description">
                                    <div class="edit" field="content_body" rel="post">
                                        <p class="element">This text is set by default and it is suitable for edit in real time. By default the drag and drop core feature will allow you to position it
                                            anywhere on the site. Get creative &amp; <strong style="font-weight: 600">Make Web</strong>.</p>
                                    </div>
                                    <module type="shop/cart_add" rel="post"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="inner-bottom-box">
            <div class="container">
                <div class="box-container">
                    <div class="edit" field="related_products" rel="inherit">
                        <div class="latest-items">
                            <h2 class="section-title element">Related Products</h2>
                            <module type="shop/products" related="true" limit="3" ajax-paging="true" data-show="thumbnail,title,add_to_cart,price"/>
                            <p class="element">&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- parser -->
</div>
<?php include TEMPLATE_DIR . "footer.php"; ?>
