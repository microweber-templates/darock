<?php

/*

type: layout

name: Google Maps

position: 6

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

<div class="nodrop safe-mode edit <?php print $layout_classes; ?>" field="layout-skin-6-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="box-container">
            <module type="google_maps">
        </div>
    </div>
</div>