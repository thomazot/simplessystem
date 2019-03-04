<?php

function zotWidget($name){

    ?>
    
    <?php if ( is_active_sidebar( $name ) ): ?>
		<section class="widget widget--<?php echo $name; ?>">
			<div class="widget__container">
				<div class="widget__border">
					<?php dynamic_sidebar( $name ); ?>
				</div>
			</div>
		</section>	
	<?php endif; ?>
    
    <?php

}