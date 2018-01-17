<?php

/*

type: layout

name: Contact form

position: 7

*/

?>

<div class="nodrop safe-mode edit" field="layout-skin-7-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="box-container">
            <p align="center" class="element">
                <br />
                Contact us and share with us you thoughts.
                We will respond as soon as we can.
                Thank you!
                <br />
                <br />
            </p>

            <div class="mw-row contacts-block">
                <div class="mw-col" style="width: 50%;">
                    <div class="mw-col-container">
                        <module type="contact_form"/>
                    </div>
                </div>

                <div class="mw-col" style="width: 50%;">
                    <div class="mw-col-container">
                        <div class="well contacts-info">
                            <h3>Morbi eu mollis erat</h3>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus augue tellus, aliquet sed sagittis in, molestie sagittis ante. Quisque venenatis lorem sit
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