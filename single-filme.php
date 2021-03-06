<?php get_header(); ?>
<head>
    <meta name="description" content="<?php the_field('descript'); ?>">
    <title><?php the_title(); ?></title>
</head>
<main>
    <section id="banner">
        <div class="background">
            <div class="content--wrapper">
                <div class="content">
                    <h1 class="uppercase"><?php the_title(); ?></h1>
                    <h2 class="uppercase"><?php the_field('subtitle'); ?></h2>
                </div>
            </div>
        </div>
    </section>
    <section id="banner" class="article">
    </section>
    <section id="article">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 paper">
                    <div class="download">
                        <a target="_blank" href="<?php the_field('link'); ?>">
                            <img class="file-type img-responsive" src="<?php the_field('cover'); ?>">
                            <spam class="btn btn-green">Assistir</spam>
                        </a>
                    </div>
                    <?php the_field('content'); ?>
                </div>
                <div class="offset-md-2 col-md-8 comments">
                    <?php comments_template( '', true ); ?>
                </div>                
            </div>
        </div>  
    </section>
</main>
<?php get_footer(); ?>