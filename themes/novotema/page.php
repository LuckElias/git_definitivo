<?php get_header();?>

    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();

                
    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
    </div>
    <?php if(!is_page('contato')){ ?>
    <div class="row">
        <div class="col-md-12">
                <h2><?php the_content(); ?></h2>
        </div>
    </div>    
    <?php }// fim if não é contato ?>
    
    <?php if(is_page('contato')){ ?>
    <div class="row">
        <div class="col-md-4">
            <?php the_content(); ?>
        </div>
         <div class="col-md-8">
           <iframe src="https://www.google.com/maps/embed?pb" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
     <?php }// fim if não é contato ?>
    <?php            
                
            }
        }
        
    ?>
    
    
<?php get_footer();?>    