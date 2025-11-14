<?php
/*
    Template Name: Validar

*/

get_header(); ?>

<section class="py-5">
    <div class="container">
        <div class="row gx-xl-5">
          <p>Insira o codigo para validação do cracha</p>
            <form class="" action="https://oftalmodapaulista.com.br/profissional/wp-content/themes/prof-oftalmo/form_action/validar.php" method="post">
            <input class="w-100 mb-2" name="codigo" required type="text" placeholder="codigo">

            <input class="btn" style="margin-right: 7px; line-height: 42px;" name="" type="submit"><input class="btn" name="" type="reset">
          </form>
        </div>
    </div>
</section>

<?php

get_footer();

?>
