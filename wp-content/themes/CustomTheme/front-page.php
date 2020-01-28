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


</div>
<div class="container-fluid bg-white">
<div class="container">
    <div class="row pt-5">
        <div class="col-md-6">
            <h3>IRON MAN</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et leo fermentum, porttitor odio sit amet, dignissim orci. Mauris eget tortor id ante vestibulum sollicitudin sed ac massa. 
                Morbi id tellus nec lectus ornare aliquam et quis arcu. Maecenas laoreet faucibus orci, eu pretium justo placerat non.</p>
            <button class="btn btn-danger">I AM IRON MAN</button>
        </div>
        <div class="col-md-6"><img src="http://localhost/custom/wp-content/uploads/2020/01/iron.png" alt="" srcset="" height="100%" width="450"></div>
    </div>
</div>
</div>
<?php get_footer();?>