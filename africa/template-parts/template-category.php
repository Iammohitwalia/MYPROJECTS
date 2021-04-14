<?php

$taxonomy = 'instrument';
$terms = get_terms($taxonomy); // Get all terms of a taxonomy

if ( $terms && !is_wp_error( $terms ) ) :
?>
    <ul class="post_filter"><li><a id="all">All post</a></li>
        <?php foreach ( $terms as $term ) { ?>
        <li>
            <a  id="<?php echo $term->slug; ?>"><?php echo $term->name; ?></a>
            </li>
        <?php } ?>
    </ul>
<?php endif;?>
