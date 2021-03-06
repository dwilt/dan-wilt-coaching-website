<?php
function jsd_pagination($max_num_pages, $found_posts, $paged){

    if( $found_posts > 3 ):
        ?>
        <nav class="pagination" role="navigation">
            <?php
            $big = 999999999; // need an unlikely integer
            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, $paged ),
                'total' => $max_num_pages,
                'end_size' => 0,
                'start_size' => 1,
                'prev_text' => 'PREVIOUS',
                'next_text' => 'NEXT',
                'add_args' => false,
                'type' => 'list'
            ) );
            ?>
        </nav>
        <?php
    endif;

} ?>