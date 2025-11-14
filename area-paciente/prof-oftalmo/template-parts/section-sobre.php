<section class="py-5 bg-white">
    <div class="container">
        <div class="row gx-xl-5">

            <div class="col-lg-6">
                <p class="text-secondary small text-center pb-0 mb-0 text-lg-start">Quem somos</p>
                <h2 class="fw-bold h2 mb-4 mx-auto mx-lg-0 text-center text-lg-start text-primary" style="max-width: 280px;">A Oftalmologia da <span class="text-secondary">EPM-UNIFESP</span></h2>
                <div class="mb-4">
                    <?php
                    $post = get_post(14183); // specific post
                    $the_content = apply_filters('the_content', $post->post_content);
                    echo $the_content; ?>
                </div>
                <div class="align-items-center mb-4 row">
                    <div class="col-5 col-sm-auto mb-3">
                        <figure class="overflow-hidden rounded-circle">
                            <?php echo wp_get_attachment_image( get_field('chefia', 14183)['perfil_chefia'], 'full', "", ["class" => "img-fluid"]); ?>
                        </figure>
                    </div>
                    <div class="col-auto">
                        <p class="fw-bold mb-2 pb-0"><?php echo get_field('chefia', 14183)['nome_chefia']; ?></p>
                        <p><?php echo get_field('chefia', 14183)['texto_chefia']; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">

                <div style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#videosobre">
                    <div class="s-card-video align-items-center d-flex justify-content-center position-relative w-100 h-hover-animate-pulse">
                        <?php
                        $img_destacada = get_post_thumbnail_id(14183);
                        echo wp_get_attachment_image( $img_destacada, 'full', "", ["class" => "img-fluid"]);
                        ?>
                        <div class="position-absolute display-1 s-card-video__icon">
                            <i class="fa-regular fa-circle-play text-white"></i>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal modal-xl fade js-videosobre" id="videosobre" tabindex="-1" aria-labelledby="videosobreLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content bg-transparent border-0">
                            <div class="bg-transparent border-0 d-flex justify-content-end modal-header">
                                <button type="button" class="bg-transparent border-0" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fa-solid fa-xmark text-white fs-3"></i>
                                </button>
                            </div>
                            <div class="modal-body d-flex justify-content-center">
                                <div class="ratio ratio-16x9">
                                    <?php echo get_field('nossa_historia', 14183)['video']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
jQuery(document).ready(function ($) {

    // parar o vídeo do youtube, ao fechar o modal
    $(".js-videosobre").on('hidden.bs.modal', function (e) {
        $(".js-videosobre iframe").attr("src", $(".js-videosobre iframe").attr("src"));
    });

    var body = $('body');
});

</script>
