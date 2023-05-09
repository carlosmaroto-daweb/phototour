<?php
    /*
     * Template Name: Reviews
     */
    get_header();
    get_template_part('nav', 'blog');
?>

<main class="main">
    <!-- Last entries -->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h3>Last entries...</h3>
                    
                    <!-- Aquí comienza el bucle-->
                    <?php
                        $args = array(
                            'posts_per_page' => 5,                         // Queremos 5 post por página
                            'post_type'      => array('mpm_reviews'),      // Solo queremos el custom-post-type
                        );
                        $latest_posts = new WP_Query($args);
                        
                        if($latest_posts->have_posts()):
                            while($latest_posts->have_posts()):
                                $latest_posts->the_post();
                                /* Si tengo una imagen representativa la visualizo y si no muestro una imagen por defecto */
                                if(has_post_thumbnail()) { // Esta función devuelve true si hay una imagen representativa
                                    // Recupero la imagen representativa
                                    $PostImg = get_the_post_thumbnail_url();
                                } else {
                                    $PostImg = get_template_directory_uri().'/assets/images/phototour/default.jpg';
                                }
                    ?>
                                <!-- Article -->
                                <article class="entry">
                                    <figure class="entry-media">
                                        <a href="<?php the_permalink();?>">
                                            <img src="<?php echo $PostImg;?>" alt="Image <?php the_title();?>">
                                        </a>
                                    </figure>
                                    <div class="entry-body">
                                        <div class="entry-meta">
                                            <span class="entry-author">
                                                by <?php the_author_posts_link();?>
                                            </span>
                                            <span class="meta-separator">|</span>
                                            <?php the_time('j, M Y');?>
                                            <span class="meta-separator">|</span>
                                            <?php comments_number('No comments', 'One comment', '% comments');?>
                                            <span class="meta-separator">|</span>
                                            <?php echo get_num_visits($post->ID);?>
                                        </div>
                                        <br/>
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                        </h2>
                                        <div class="entry-cats">
                                            in <?php the_category(' & ');?>
                                        </div>
                                        <div class="entry-content">
                                            <p><?php the_excerpt();?></p>
                                            <a href="<?php the_permalink();?>" class="read-more">Continue Reading</a>
                                        </div>
                                    </div>
                                </article>

                    <!-- Aquí termina el bucle-->
                    <?php
                            endwhile;
                        else:
                            echo 'No posts published yet...';
                        endif;
                        
                        wp_reset_query();
                    ?>

                    <!-- Page Navigation -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                    <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item">
                                <a class="page-link page-link-next" href="#" aria-label="Next">
                                    Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Sidebar -->
                <aside class="col-lg-3">
                    <?php
                        get_sidebar();
                    ?>
                </aside>
            </div>
        </div>
    </div>
</main>

<?php
    get_footer();
?>