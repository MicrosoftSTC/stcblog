<?php
/**
 * Embedded article template.
 * @copyright Copyright (C) 2020 Petr Kucera
 * @license GPL(GPLv3)
 */
?>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') . get_css_name();?>"/>
	<div <?php post_class( 'wp-embed' ); ?>>
            <article class="wp-embed__posts">
                <a target="_blank" class="excerpts" href="<?php the_permalink(); ?>">
                    <div class="excerpts__thumbnail">
                        <?php the_post_thumbnail([360, 240]); ?>
                    </div>
                    <div class="excerpts__text">
						<h2 class="excerpts__text__title"><?php the_title(); ?></h2>
						<?php 
						function custom_excerpt_length() {
							return 20;
						}
						add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
						the_excerpt(); ?>
                        <div class="excerpts__text__meta">
                            <span class="excerpts__text__meta__date"><?php echo get_the_date(); ?></span>
                            <span>•</span>
                            <span class="excerpts__text__meta__readtime">Doba čtení: <?php echo reading_time(); ?></span>
                        </div>
                    </div>
                </a>
            </article>
	</div>
<?php
