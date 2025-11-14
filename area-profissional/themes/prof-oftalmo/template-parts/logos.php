<?php $img = 13939; ?>
<section>
    <div class="container py-5">
        <div class="flex-nowrap justify-content-center align-items-center row gx-md-5">
            <div class="col-auto flex-fill flex-sm-grow-0">
                <img src="<?php echo get_field('imagens', $img)['img_1']; ?>" alt="" class="img-fluid">
            </div>
            <div class="col-auto flex-fill flex-sm-grow-0">
                <img src="<?php echo get_field('imagens', $img)['img_2']; ?>" alt="" class="img-fluid">
            </div>
            <div class="col-auto flex-fill flex-sm-grow-0">
                <img src="<?php echo get_field('imagens', $img)['img_3']; ?>" alt="" class="img-fluid">
            </div>
            <div class="col-auto flex-fill flex-sm-grow-0">
                <img src="<?php echo get_field('imagens', $img)['img_4']; ?>" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
