<?php

// check if the repeater field has rows of data
if( have_rows('menu') ):

 	// loop through the rows of data
    while ( have_rows('menu') ) : the_row();

        // display a sub field value ?>

        <tbody>
          <tr>
            <td><?php the_sub_field('day'); ?></td>
            <td><?php the_sub_field('lunch'); ?></td>
            <td><?php the_sub_field('dinner'); ?></td>
          </tr>
        </tbody>
        

<?php
    endwhile;

else :

    // no rows found

endif;

?>
