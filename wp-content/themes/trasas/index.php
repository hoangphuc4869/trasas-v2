<?php /**template name: Home */ get_header() ?>
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

<div class="container ourServices">
    <div class="text-heading"><?php echo get_field('service-text') ?></div>
    <div class="row">
        <?php if(have_rows('services')): while(have_rows('services')): the_row(); ?>
        <div class="col-lg-4">
            <div class="service position-relative">
                <div class="ser-img">
                    <img src="<?php echo get_sub_field('img') ?>" alt="" class="w-100 img-fluid">
                </div>

                <div class="ser-title">
                    <p class="t"><a href="<?php echo get_sub_field('link') ?>"><?php echo get_sub_field('title') ?></a>
                    </p>

                </div>
                <?php echo get_sub_field('icon') ?>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </div>
</div>

<div class="container-fluid activeYears px-0"
    style="background-image: url('<?php echo get_field('avitve-year-background') ?>');background-position: center;background-size:cover;">
    <div class="row rowYears">
        <div class="col-lg-4 col-12 itemm">
            <p class=" active-number"><?php echo get_field('active-number') ?></p>
            <p class="active-text"><?php echo get_field('active-text') ?></p>
        </div>
        <?php if(have_rows('others')): while(have_rows('others')): the_row(); ?>
        <div class="col-lg-2 col-6 others item">
            <?php echo get_sub_field('icon') ?>
            <p class="others-text"><?php echo get_sub_field('text') ?></p>
            <p class="others-number"><?php echo get_sub_field('number') ?></p>
        </div>
        <?php endwhile; endif; ?>

    </div>
</div>
<div class="container">
    <div class="text-heading"><?php echo get_field('news-text')?></div>
</div>
<div class="container news-sec">

    <div class="news">
        <?php
        $args = array(
            'posts_per_page' => 1,
            'order'          => 'DESC',
            'orderby'        => 'date',
        );

        $latest_post_query = new WP_Query($args);

        if ($latest_post_query->have_posts()) {
            while ($latest_post_query->have_posts()) {
                $latest_post_query->the_post();
            $categories = get_the_category(); ?>
        <div class="news-img">
            <?php the_post_thumbnail() ?>
            <div class="time">
                <i class="fa-solid fa-calendar-days"></i>
                <?php if ($categories) {

            foreach ($categories as $category) {
                echo esc_html($category->name) . ', ' . get_the_date('F d, Y');
            }
            }
            ?>
            </div>
        </div>
        <div class="news-title"><?php the_title() ?></div>
        <div class="news-des"><?php the_excerpt() ?></div>

        <?php }
            wp_reset_postdata();
        }
        ?>
    </div>

    <?php
    $args = array(
        'posts_per_page' => 4,
        'order'          => 'DESC',
        'orderby'        => 'date',
    );

    $latest_posts_query = new WP_Query($args);
    if ($latest_posts_query->have_posts()) {
        $counter = 0;

        while ($latest_posts_query->have_posts()) {
            $latest_posts_query->the_post();
            if ($counter === 0) {
                $counter++;
                continue;
            }
            $categories = get_the_category(); ?>

    <div class="news">
        <div class="news-img news-img2">
            <?php the_post_thumbnail() ?>
            <div class="time">
                <i class="fa-solid fa-calendar-days"></i>
                <?php if ($categories) {

            foreach ($categories as $category) {
                echo esc_html($category->name) . ', ' . get_the_date('F d, Y');
            }
            }
            ?>
            </div>
        </div>
        <div class="time2">
            <i class="fa-solid fa-calendar-days"></i>
            <?php if ($categories) {

            foreach ($categories as $category) {
                echo esc_html($category->name) . ', ' . get_the_date('F d, Y');
            }
            }
            ?>
        </div>
        <div class="news-title"><?php the_title() ?></div>
        <div class="news-des"><?php the_excerpt() ?></div>
    </div>

    <?php 
            $counter++;
            if ($counter === 4) {
                break;
            }
        }
        wp_reset_postdata();
    }
    ?>
</div>
<?php get_footer() ?>