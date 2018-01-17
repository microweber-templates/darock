<?php

/*

type: layout

name: Posts

position: 2

*/

?>

<div class="nodrop safe-mode edit" field="layout-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="box-container">
            <div class="content-gallery-slider home-slider">
                <module type="posts" template="grid" hide-paging="true" data-show="thumbnail,title"/>
            </div>
        </div>
    </div>
</div>