<?php

/*

type: layout

name: Contact form

position: 7

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

<div class="nodrop safe-mode edit <?php print $layout_classes; ?>" field="layout-skin-7-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="box-container">
            <div class="allow-drop">
                <p align="center" class="element">
                    <br/>
                    Contact us and share with us you thoughts.
                    We will respond as soon as we can.
                    Thank you!
                    <br/>
                    <br/>
                </p>
            </div>

            <div class="mw-row contacts-block">
                <div class="mw-col" style="width: 50%;">
                    <div class="mw-col-container">
                        <module type="contact_form"/>
                    </div>
                </div>

                <div class="mw-col" style="width: 50%;">
                    <div class="mw-col-container">
                        <div class="well contacts-info allow-drop">
                            <h3>Morbi eu mollis erat</h3>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus augue tellus, aliquet
                                sed sagittis in, molestie sagittis ante. Quisque venenatis lorem sit
                                amet placerat posuere.</p>
                            <hr>
                            <module type="social_links">
                        </div>
                    </div>
                </div>
            </div>

            <p class="element"><br></p>
        </div>
    </div>
</div>