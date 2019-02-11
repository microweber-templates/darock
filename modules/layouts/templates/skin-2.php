<?php

/*

type: layout

name: Posts

position: 2

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

<div class="nodrop safe-mode edit <?php print $layout_classes; ?>" field="layout-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="box-container">
            <div class="content-gallery-slider home-slider">
                <module type="posts" template="grid" hide-paging="true" data-show="thumbnail,title"/>
            </div>
        </div>
    </div>
</div>