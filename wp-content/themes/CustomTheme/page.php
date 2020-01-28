<?php get_header();?>
<div class="container-fluid">
    <div class="theme-banner">
        <h1 class="main-title"><?php the_title();?></h1>
    </div>
</div>

<div class="container pt-5">

    <div class="row">

        <?php if (have_posts()) : while(have_posts()) : the_post();?>
        <div class="col-md-12"><?php the_content();?></div>
        <?php endwhile; endif;?>

    </div>

    <div class="row pt-5">
        <div class="col-md-6">Left Column</div>
        <div class="col-md-6">Right Column</div>
    </div>
</div>

<?php get_footer();?>