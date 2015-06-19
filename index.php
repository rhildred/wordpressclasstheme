<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Wordpress</title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    </head>
    <body>

        <!-- Nav -->
            <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>





         <div id="main" class="container">
             <div id="home">
             <?php $recent = new WP_Query("pagename=home"); while($recent->have_posts()) : $recent->the_post();?>
                <?php the_content(); ?>
               <?php endwhile; ?>
             </div>
             <hr />
	        <div id="blog">
		        <h1>Blog Posts</h1>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
		                <p><?php the_content(__('(more...)')); ?></p>
		       <hr> <?php endwhile;endif?>
		    </div>
             <div id="about">
             <?php $recent = new WP_Query("pagename=about"); while($recent->have_posts()) : $recent->the_post();?>
                 <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
               <?php endwhile; ?>
             </div>
             <hr />
             <div id="contact">
             <?php $recent = new WP_Query("pagename=contact"); while($recent->have_posts()) : $recent->the_post();?>
                 <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
               <?php endwhile; ?>
             </div>
             <hr />




        </div>       
    </body>
</html>
