<section>
    <?php
        $popup = get_field('popup_actif','options');
        $contentPopUp = get_field('popup_text','options');
        $imagePu = get_field('popup_image','options');
        $cta = get_field('lien_popup','options');

        if($popup):?>
            <div class="modal_popup" id="modal_popup_front">


                <div class="centerPopup">
                    <div class="close_popup" id="close_popup">x</div>
                    
                    <a href="<?php echo $cta['url'];?>" class="content_popup">
                        <?php if($contentPopUp):
                            echo $contentPopUp;
                        elseif ($imagePu):?>
                            <img src="<?php echo $imagePu['url'];?>" alt="<?php echo $imagePu['title'];?>"/>
                        <?php endif;?>
                    </a>
                </div>
            </div>
        <?php endif;?>
</section>