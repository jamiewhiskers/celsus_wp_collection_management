<?php 
    get_header();
    while ( have_posts() ) : the_post();
	    $meta_ccms = get_post_meta(get_the_ID() , FALSE, TRUE);
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header alignwide">
	        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->
        <div class="entry-content">
        <div class="wp-block-columns">
            <div class="wp-block-column">
                <figure class="wp-block-image size-full">
                	<?php if ( has_post_thumbnail() && !post_password_required() && empty( $single_featured_image )) : ?>
                		<?php the_post_thumbnail( 'bbl-book-cover-medium' ); ?>
                	<?php endif; ?>
            	</figure>
            </div>
            
        
            <div class="wp-block-column">
     
            <table class="">
                <?php
            		foreach ( get_fields() as $field ) {
            			$value = get_post_meta( get_the_ID(), $field['name'], true );
                        if(!($meta_ccms[$field['name']][0] == null || $meta_ccms[$field['name']][0] == '')){
                            if($field['type'] == "text"){
                                ?>
                                <tr>
                                    <td><label for="<?php echo $field['title'];?>"><strong><?php echo $field['title'];?></strong></label></td>
                                    <td><?php echo $meta_ccms[$field['name']][0]; ?></td>
                                </tr>
                                <?php                                
                            }if($field['type'] == "date"){
                                ?>
                                <tr>
                                    <td><label for="<?php echo $field['title'];?>"><strong><?php echo $field['title'];?></strong></label></td>
                                    <td><?php echo $meta_ccms[$field['name']][0]; ?></td>
                                </tr>
                                <?php                                
                            }elseif($field['type'] =="area"){
                                ?>
                                <tr><td colspan="2"><label for="<?php echo $field['title'];?>"><strong><?php echo $field['title'];?></strong></label></td></tr>
                                <tr><td colspan="2"><?php echo $meta_ccms[$field['name']][0]; ?></tr></td>
                                </tr>
                                <?php                            
                            }
                            
                        }

            		}                
                ?>
            </table>
            </div>                
        </div>
	</article>
	<?php endwhile; ?>
<?php get_footer(); ?>
