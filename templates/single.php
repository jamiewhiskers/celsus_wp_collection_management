
<?php 
    get_header();
    while ( have_posts() ) : the_post();
	    $meta_ccms = get_post_meta(get_the_ID() , FALSE, TRUE);
//$meta_ccms = the_meta(get_the_ID());

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
            <table class="has-fixed-layout">
                <tr><td colspan="2"><?php echo $meta_ccms['ccms_item_name'][0]; ?></td></tr>
                    <?php
                    if(!($meta_ccms['ccms_identification_number'][0] == null || $meta_ccms['ccms_identification_number'][0] == '')){
                    ?>
                    <tr>
                        <td>Identification Number</td>
                        <td><?php echo $meta_ccms['ccms_identification_number'][0]; ?></td>
                    </tr>
                    <?php 
                    } 
                    if(!($meta_ccms['ccms_item_type'][0] == null || $meta_ccms['ccms_item_type'][0] == '')){
                    ?>
                    <tr>
                        <td>Item Type</td>
                        <td><?php echo $meta_ccms['ccms_item_type'][0]; ?></td>
                    </tr>
                    <?php 
                    } 
                    if(!($meta_ccms['ccms_item_name'][0] == null || $meta_ccms['ccms_item_name'][0] == '')){
                    ?>
                    <tr>
                        <td>Item Name</td>
                        <td><?php echo $meta_ccms['ccms_item_name'][0]; ?></td>
                    </tr>
                    <?php
                    } 
                    if(!($meta_ccms['ccms_item_title'][0] == null || $meta_ccms['ccms_item_name'][0] == '')){
                    ?>
                    <tr>
                        <td>Item Title</td>
                        <td><?php echo $meta_ccms['ccms_item_title'][0]; ?></td>
                    </tr>
                    <?php
                    } 
                    if(!($meta_ccms['ccms_description'][0] == null || $meta_ccms['ccms_description'][0] == '')){
                    ?>
                    <tr>
                        <td colspan="2">Item descriptions</td>
                    </tr>
                    <tr>
                        <td colspan="2"><?php echo $meta_ccms['ccms_description'][0]; ?></td>
                    </tr>
                    <?php
                    } 
                    if(!($meta_ccms['ccms_inscriptions'][0] == null || $meta_ccms['ccms_inscriptions'][0] == '')){
                    ?>
                    <tr>
                        <td>Item Inscriptions</td>
                        <td><?php echo $meta_ccms['ccms_inscriptions'][0]; ?></td>
                    </tr>
                    <?php
                    } 
                    if(!($meta_ccms['ccms_dimensions'][0] == null || $meta_ccms['ccms_dimensions'][0] == '')){
                    ?>
                    <tr>
                        <td>Item Dimensions</td>
                        <td><?php echo $meta_ccms['ccms_dimensions'][0]; ?></td>
                    </tr>
                    <?php
                    } 
                    if(!($meta_ccms['ccms_production_method'][0] == null || $meta_ccms['ccms_production_method'][0] == '')){
                    ?>
                    <tr>
                        <td>Production Method</td>
                        <td><?php echo $meta_ccms['ccms_production_method'][0]; ?></td>
                    </tr>
                    <?php
                    } 
                    if(!($meta_ccms['ccms_production_material'][0] == null || $meta_ccms['ccms_production_material'][0] == '')){
                    ?>
                    <tr>
                        <td>Production Material</td>
                        <td><?php echo $meta_ccms['ccms_production_material'][0]; ?></td>
                    </tr>
                    <?php
                    } 
                    if(!($meta_ccms['ccms_context'][0] == null || $meta_ccms['ccms_context'][0] == '')){
                    ?>
                    <tr>
                        <td>Context</td>
                        <td><?php echo $meta_ccms['ccms_context'][0]; ?></td>
                    </tr>
                    <?php
                    } 
                    if(!($meta_ccms['ccms_statement'][0] == null || $meta_ccms['ccms_statement'][0] == '')){
                    ?>
                    <tr>
                        <td>Statement</td>
                        <td><?php echo $meta_ccms['ccms_statement'][0]; ?></td>
                    </tr>
                    <?php
                    } 
                    if(!($meta_ccms['ccms_creator'][0] == null || $meta_ccms['ccms_creator'][0] == '')){
                    ?>
                    <tr>
                        <td>Creator</td>
                        <td><?php echo $meta_ccms['ccms_creator'][0]; ?></td>
                    </tr>
                    <?php
                    } 
                    if(!($meta_ccms['ccms_where'][0] == null || $meta_ccms['ccms_where'][0] == '')){
                    ?>
                    <tr>
                        <td>Where Created/Made</td>
                        <td><?php echo $meta_ccms['ccms_where'][0]; ?></td>
                    </tr>
                    <?php
                    } 
                    if(!($meta_ccms['ccms_when'][0] == null || $meta_ccms['ccms_when'][0] == '')){
                    ?>
                    <tr>
                        <td>Creation Date</td>
                        <td><?php echo $meta_ccms['ccms_when'][0]; ?></td>
                    </tr>
                    <?php
                    } 
                    if(!($meta_ccms['ccms_provenance'][0] == null || $meta_ccms['ccms_provenance'][0] == '')){
                    ?>
                    <tr>
                        <td>Provenance Events</td>
                        <td><?php echo $meta_ccms['ccms_provenance'][0]; ?></td>
                    </tr>
                    <?php
                    } 
                    if(!($meta_ccms['ccms_acquisition'][0] == null || $meta_ccms['ccms_acquisition'][0] == '')){
                    ?>
                    <tr>
                        <td>Acquistion</td>
                        <td><?php echo $meta_ccms['ccms_acquisition'][0]; ?></td>
                    </tr>
                    <?php
                    } 
                    if(!($meta_ccms['ccms_loans'][0] == null || $meta_ccms['ccms_loans'][0] == '')){
                    ?>
                    <tr>
                        <td>Loans</td>
                        <td><?php echo $meta_ccms['ccms_loans'][0]; ?></td>
                    </tr>
                    <?php
                    } 
                    if(!($meta_ccms['ccms_condition'][0] == null || $meta_ccms['ccms_condition'][0] == '')){
                    ?>
                    <tr>
                        <td>Item Condition</td>
                        <td><?php echo $meta_ccms['ccms_condition'][0]; ?></td>
                    </tr>
                    <?php
                    } 
                    if(!($meta_ccms['ccms_date'][0] == null || $meta_ccms['ccms_date'][0] == '')){
                    ?>
                    <tr>
                        <td>Condition report date</td>
                        <td><?php echo $meta_ccms['ccms_date'][0]; ?></td>
                    </tr>
                    <?php
                    } 
                    if(!($meta_ccms['ccms_risk'][0] == null || $meta_ccms['ccms_risk'][0] == '')){
                    ?>
                    <tr>
                        <td>Risk assessment</td>
                        <td><?php echo $meta_ccms['ccms_risk'][0]; ?></td>
                    </tr>
                    <?php
                    } 
                    if(!($meta_ccms['ccms_location'][0] == null || $meta_ccms['ccms_location'][0] == '')){
                    ?>
                    <tr>
                        <td>Item Location</td>
                        <td><?php echo $meta_ccms['ccms_location'][0]; ?></td>
                    </tr>
                    <?php
                    } 
                    if(!($meta_ccms['ccms_supplementary'][0] == null || $meta_ccms['ccms_supplementary'][0] == '')){
                    ?>
                    <tr>
                        <td>Supplementary Files</td>
                        <td><?php echo $meta_ccms['ccms_supplementary'][0]; ?></td>
                    </tr>
                    <?php
                    } 
                    if(!($meta_ccms['ccms_restrictions'][0] == null || $meta_ccms['ccms_restrictions'][0] == '')){
                    ?>
                    <tr>
                        <td>Restrictions</td>
                        <td><?php echo $meta_ccms['ccms_restrictions'][0]; ?></td>
                    </tr> 
                    <?php
                    } 
                    if(!($meta_ccms['ccms_rights'][0] == null || $meta_ccms['ccms_rights'][0] == '')){
                    ?>
                    <tr>
                        <td>Rights (moral/copyright)</td>
                        <td><?php echo $meta_ccms['ccms_rights'][0]; ?></td>
                    </tr>
                    <?php
                    } 
                    if(!($meta_ccms['ccms_note'][0] == null || $meta_ccms['ccms_note'][0] == '')){
                    ?>
                    <tr>
                        <td>Notes</td>
                        <td><?php echo $meta_ccms['ccms_note'][0]; ?></td>
                    </tr>
                    <?php
                    } 
                    if(!($meta_ccms['ccms_file'][0] == null || $meta_ccms['ccms_file'][0] == '')){
                    ?>
                    <tr>
                        <td>File</td>
                        <td><?php echo $meta_ccms['ccms_file'][0]; ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>                
        </div>
	</article>
	<?php endwhile; ?>
<?php get_footer(); ?>
