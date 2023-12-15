<div class="container footer">
    <div class="row justify-content-center">
        <div class="col-lg-3 logo-footer">
            <a href="<?php home_url() ?>"><img src="<?php echo get_field('logo-img', 'option')?>" alt=""></a>
        </div>
        <div class="col-lg-3 position-relative">
            <div class="f-group">

                <?php if(have_rows('address', 'option')): while(have_rows('address', 'option')): the_row(); ?>
                <div class="address-group">
                    <?php echo get_sub_field('icon', 'option') ?>
                    <span class="address"><?php echo get_sub_field('add', 'option') ?></span>
                </div>
                <?php endwhile; endif; ?>

                <div class="social">
                    <?php if(have_rows('socials', 'option')): while(have_rows('socials', 'option')): the_row(); ?>
                    <a href="<?php echo get_sub_field('link')?>"><?php echo get_sub_field('icon')?></a>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
        <div class="col-lg-3 phone">
            <?php if(have_rows('phone', 'option')): while(have_rows('phone', 'option')): the_row(); ?>
            <div class="f-group">
                <?php echo get_sub_field('icon') ?>
                <a href="tel:<?php echo get_sub_field('text', 'option')?>"><?php echo get_sub_field('text')?></a>
            </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="col-lg-3 phone">
            <?php if(have_rows('mails', 'option')): while(have_rows('mails', 'option')): the_row(); ?>
            <div class="f-group">
                <?php echo get_sub_field('icon') ?>
                <a href="mailto:<?php echo get_sub_field('text', 'option')?>"><?php echo get_sub_field('text')?></a>
            </div>
            <?php endwhile; endif; ?>

            <div class="f-group">
                <i class="fa-solid fa-earth-americas" style="color: #006cb7;"></i>
                <a href="<?php echo get_field('web', 'option')?>"><?php echo get_field('web', 'option')?></a>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid license">
    <?php echo get_field('license', 'option')?>
</div>




</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/app.js"></script>

</html>