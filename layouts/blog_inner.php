<?php include TEMPLATE_DIR . "header.php"; ?>

<div class="edit" rel="content" field="darock_content">
    <div class="container nodrop" id="blog-container">
        <div class="box-container">
            <div id="blog-content-<?php print CONTENT_ID; ?>">
                <div class="" data-mw="main">
                    <div class="col-lg-9" id="blog-main-inner">
                        <h3 class="page-title edit" field="title" rel="content">Page Title</h3>
                        <div class="post-content">
                            <module data-type="pictures" data-template="skin-2" rel="content"/>
                            <div class="edit" field="content_body" rel="content">
                                <div class="element">
                                    <p align="justify">This text is set by default and is suitable for edit in real time. By default the drag and drop core feature will allow you to position it
                                        anywhere
                                        on the site. Get creative, Make Web.</p>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div>
                            <div class="blog-socials-bar" style="width: 320px;">
                                <div class="mw-ui-row-nodrop">
                                    <div class="mw-ui-col">
                                        <module type="sharer" id="blog-post-share"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <br>

                        <module data-type="comments" data-content-id="<?php print CONTENT_ID; ?>"/>
                    </div>

                    <div class="col-lg-3" id="blog-sidebar">
                        <?php include "blog_sidebar.php"; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- parser -->
</div>

<?php include TEMPLATE_DIR . "footer.php"; ?>
