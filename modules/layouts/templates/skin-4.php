<?php

/*

type: layout

name: Blog with Sidebar

position: 4

*/

?>

<div class="nodrop safe-mode edit" field="layout-skin-4-<?php print $params['id'] ?>" rel="module">
    <div class="container" data-mw="main">
        <div class="box-container">
            <div class="">
                <div class="col-md-9">
                    <module content-id="<?php print PAGE_ID; ?>" type="posts" template="clean" data-show="thumbnail,title,description,read_more" description-length="220"/>
                </div>
                <div class="col-md-3" id="blog-sidebar">
                    <?php include template_dir() . "layouts/blog_sidebar.php"; ?>
                </div>
            </div>
        </div>
    </div>
</div>