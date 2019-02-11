<?php

/*

type: layout

name: Simple Title

position: 8

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

<div class="nodrop safe-mode edit <?php print $layout_classes; ?>" field="layout-skin-8-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="box-container">
            <h2 class="element" align="center">Page Title</h2>
            <p><br></p>
        </div>
    </div>
</div>