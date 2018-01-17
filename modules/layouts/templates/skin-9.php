<?php

/*

type: layout

name: Gallery

position: 9

*/

?>

<div class="nodrop safe-mode edit" field="layout-skin-9-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="box-container col-xs-12">
            <h2 class="page-title">Hot Concept Art</h2>
            <div class="masonry-gallery">
                <module content-id="<?php print PAGE_ID; ?>" type="pictures" template="skin-1"/>
            </div>
        </div>
    </div>
</div>