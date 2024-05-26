<?php
/**
 * Blog part template
 *
 * @package PositiveHouseWP
 * @modified_by Niyo
 */
?>
<div class="container bg-secondry-subtle blog-container">
    <div class="container">
        <div class="row blog-row">
            <div class="col-lg-6 text-start">
                <h2>Alles Wissenswerte zu Ihrer individuellen Energiewende</h2>
            </div>
            <div class="col-lg-6 text-start fs-5">
                <p>Sind Sie unsicher, ob ein Stromspeicher die richtige Investition für Sie ist? Haben Sie viele offene Fragen und benötigen zunächst grundlegende Informationen? Wir haben die Antworten, die Sie suchen. In unserem Magazinbereich bieten wir detaillierte Einblicke in die Technologie und Funktionsweise von Stromspeichern, aktuelle Entwicklungen und Hintergrundwissen zur Energiewende. Entdecken Sie das Energiesystem der Zukunft, das Sie mit sonnen schon heute nutzen können.</p>
                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="btn btn-primary blog-btn-primary mt-5">Alle Blog-Artikel anzeigen →</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row blog-row">
            <?php
            $recent_posts = new WP_Query([
                'posts_per_page' => 3,
            ]);
            while ($recent_posts->have_posts()) : $recent_posts->the_post();
            ?>
                <div class="col-md-4">
                    <div class="card mb-4 blog-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="card-img-top blog-card-img-top">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('full', ['class' => 'img-fluid rounded']); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <div class="card-body blog-card-body">
                            <p class="text-muted text-uppercase pt-2 blog-text-muted">
                                <?php
                                $category = get_the_category();
                                if (!empty($category)) {
                                    echo esc_html($category[0]->name) . ' | ';
                                }
                                echo get_the_date('F Y');
                                ?>
                            </p>
                            <h5 class="card-title blog-card-title">
                                <a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?></a>
                            </h5>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary blog-btn-primary mt-4">Mehr erfahren →</a>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
