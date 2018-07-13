<?php
/**
 * This file outputs a header with items in a grid
 */
$class   = get_sub_field( 'class' );
$heading = get_sub_field( 'heading' );

$bg_image = ign_get_the_header_image( get_the_ID(), 'image');

?>

<header class="entry-header <?php echo $class; ?> <?php echo $header; ?>">

	<?php
	if($bg_image): ?>

	<div class="header-image cover-image">
		<?php echo $bg_image; ?>
	</div>
	<?php endif; ?>

	<div class="container">

		<div class="header-content text-center">
			<?php
			if ( ! $heading ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				echo '<h1 class="entry-title">' . $heading . '</h1>';
			}

			the_sub_field( 'header_text' );
			?>

		</div>


	</div>
</header>