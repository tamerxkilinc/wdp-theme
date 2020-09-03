<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<div id="content" class="site-content">
    <div class="row">
        <section id="primary" class="content-area col-sm-12 col-md-12 col-lg-12">
            <main id="main" class="site-main" role="main">

                <?php
                while ( have_posts() ) : the_post();

                $post_id = get_the_id();
                $prefix = 'wdproduct-';

                // get produkt fields
                $thumbnail = wp_get_attachment_url( get_post_thumbnail_id() );
                $image2 = rwmb_meta( $prefix . 'image2', array( 'size' => 'medium' ) );
                $gallery = rwmb_meta( $prefix . 'gallery', array( 'size' => 'full' ) );
                $specs = rwmb_meta( $prefix . 'specs' );

                ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-6 mb-4 mb-md-0 text-center text-md-left">
                                        <h1><?=get_the_title();?></h1>
                                        <p class="lead"><?=get_the_content();?></p>
                                    </div>
                                    <div class="col-12 col-md-6 text-center">
                                        <img src="<?=$thumbnail;?>" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <section class="py-5 bg-light">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-md-6 mb-4 mb-md-0 text-center text-md-left">
                                            <?php foreach ( $image2 as $img )  {
                                                echo '<img src="' . $img["url"] . '" class="img-fluid">';
                                            } ?>
                                        </div>
                                        <div class="col-12 col-md-6 text-center">
                                            Lorem impsum facto. 
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="py-5 bg-bestellmahl">
                                <div class="row">
                                    <div class="col-12 text-center text-white">
                                        Galerie
                                    </div>
                                    <?php foreach ( $gallery as $galimg ) {
                                        echo
                                        '<div class="col-6 col-md-4 col-lg-3">
                                            <a href="' . $galimg["full_url"] . '" data-fancybox="gallery">
                                                <img src="' . $galimg["url"] . '" class="img-fluid">
                                            </a>
                                        </div>';
                                        }
                                    ?>
                                </div>
                            </section>

                        </div>
                    </article>


                <?php
                endwhile; // End of the loop.
                ?>

            </main><!-- #main -->
        </section><!-- #primary -->

    </div>
</div>

<?php get_footer();