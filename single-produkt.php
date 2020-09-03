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
                $image1 = rwmb_meta( $prefix . 'image1', array( 'size' => 'medium' ) );
                $image2 = rwmb_meta( $prefix . 'image2', array( 'size' => 'medium' ) );
                $description1 = rwmb_meta( $prefix . 'description1' );
                $description2 = rwmb_meta( $prefix . 'description2' );
                $gallery = rwmb_meta( $prefix . 'gallery', array( 'size' => 'full' ) );
                $specs = rwmb_meta( $prefix . 'specs' );
                ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content">
                            <div class="container pb-5">
                                <div class="row align-items-center produkt-inforow">
                                    <div class="col-12 col-md-6 mb-4 mb-md-0 text-center text-md-left">
                                        <h1><?=get_the_title();?></h1>
                                        <?php echo do_shortcode( wpautop( $description1 ) ); ?>
                                    </div>
                                    <div class="col-12 col-md-6 text-center">
                                        <?php foreach ( $image1 as $img1 )  {
                                            echo '<img src="' . $img1["url"] . '" class="img-fluid">';
                                        } ?>
                                    </div>
                                </div>
                            </div>

                            <section class="py-5 bg-light">
                                <div class="container">
                                    <div class="row align-items-center produkt-inforow">
                                        <div class="col-12 col-md-6 mb-4 mb-md-0 text-center">
                                            <?php foreach ( $image2 as $img2 )  {
                                                echo '<img src="' . $img2["url"] . '" class="img-fluid">';
                                            } ?>
                                        </div>
                                        <div class="col-12 col-md-6 text-center text-md-right">
                                            <?php echo do_shortcode( wpautop( $description2 ) ); ?>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="py-5 bg-bestellmahl">
                                <div class="container">
                                    <div class="row produkt-inforow">
                                        <div class="col-12 text-center text-white">
                                            <h3 class="text-white">Galerie</h3>
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
                                </div>
                            </section>

                            <section class="pt-5">
                                <div class="container">
                                    <h3 class="text-center">Produktspezifikationen</h3>
                                    <table class="table table-bordered table-hover table-sm table-responsive-md">
                                        <tbody>
                                        <?php
                                            foreach ( $specs as $spec ) {
                                                echo '<tr><td class="table-secondary">' . $spec[0] . '</td><td>' . $spec[1] . '</td></tr>';
                                            }
                                        ?>
                                        </tbody>
                                    </table>      
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