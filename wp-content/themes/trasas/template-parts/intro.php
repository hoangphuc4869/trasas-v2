<?php /**template name: About us */ get_header() ?>
<div class="container-fluid px-0">
    <div class="swiper heading">
        <div class="swiper-wrapper">
            <?php if(have_rows('heading-slider', 'option')): while(have_rows('heading-slider', 'option')): the_row(); ?>
            <div class="swiper-slide">
                <img src="<?php echo get_sub_field('img')?>" alt="">
            </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="swiper-pagination-heading"></div>
    </div>
</div>

<div class="container intro">
    <div class="intro-title"><?php echo get_field('intro-title')?></div>
    <div class="row">
        <div class="col-lg-4 intro-title1"><?php echo get_field('intro-title1')?></div>
        <div class="col-lg-8 intro-text"><?php echo get_field('intro-text')?></div>
    </div>
</div>

<div class="container core">
    <div class="row">
        <?php
        $colors = ['#00AEEF','#006CB7','#073984'];
        $index = 0; 
        ?>
        <?php if(have_rows('core')): while(have_rows('core')): the_row(); ?>
        <?php
        
        $current_color = $colors[$index];
        $index = ($index + 1) % count($colors);
        ?>

        <div class="col-lg-4 col-md-6 core-wrap">
            <div class="core-title">
                <div class="shape-before" style="background-color: <?php echo $current_color ?> ;"></div>
                <?php echo get_sub_field('core-title')?>
            </div>
            <div class="core-text"
                style="border-left: 20px solid <?php echo $current_color ?>;border-bottom: 20px solid <?php echo $current_color ?>;">
                <?php echo get_sub_field('core-text')?></div>
        </div>
        <?php endwhile; endif; ?>
    </div>
</div>

<div class="field-wrap container-fluid px-0">
    <div class="working-fields container">
        <div class="working-fields-text">
            <?php echo get_field('working-fields-text') ?>
        </div>

        <div class="row">
            <div class="col-md-5 f-wrap">

                <div class="fields">
                    <ol>
                        <?php if(have_rows('working-fields')): while(have_rows('working-fields')): the_row(); ?>
                        <li><a href="<?php echo get_sub_field('link') ?>"><?php echo get_sub_field('text') ?></a></li>
                        <?php endwhile; endif; ?>
                    </ol>
                </div>

            </div>
            <div class="col-md-7">
                <img class="field-img" src="<?php echo get_field('working-fields-img') ?>" alt="" class="">
            </div>
        </div>
    </div>
</div>

<div class="oppo container-fluid position-relative px-0">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <img class="oppotunity-img" src="<?php echo get_field('oppotunity-img') ?>" alt="">
            </div>
            <div class="col-md-5 op-wrap">
                <div class="oppotunity-title">
                    <?php echo get_field('oppotunity-title') ?>
                </div>
                <div class="op-text">
                    <?php echo get_field('op-text') ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php  get_footer() ?>