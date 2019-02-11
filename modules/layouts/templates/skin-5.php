<?php

/*

type: layout

name: Simple Text with Picture

position: 5

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

<div class="nodrop safe-mode edit <?php print $layout_classes; ?>" field="layout-skin-5-<?php print $params['id'] ?>" rel="module">
    <section id="content">
        <div class="container">
            <div class="box-container col-xs-12">
                <h2>Lorem Ipsum</h2>
                <div class="richtext allow-drop">
                    <p><img src="<?php print TEMPLATE_URL; ?>img/about_me.jpg"></p>
                    <p>Information about me</p>
                    <p>Nunc eu felis fringilla enim luctus tincidunt. Sed sit amet gravida lorem, tincidunt varius erat. Fusce mi purus, tincidunt ultricies ultrices vel, auctor ut diam. Pellentesque
                        non
                        scelerisque leo, nec cursus lectus.</p>
                    <p>Donec suscipit turpis ac leo dictum ornare sed ac dolor. Suspendisse ultrices dui vel posuere tincidunt. Vivamus gravida, massa nec varius lobortis, lacus magna dignissim dolor,
                        nec
                        vestibulum nunc odio non nulla.</p>
                </div>
            </div>
        </div>
    </section>
</div>