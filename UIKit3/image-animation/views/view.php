<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


if ( empty( $atts['image'] ) ) {
	return;
}

$width  = ( is_numeric( $atts['width'] ) && ( $atts['width'] > 0 ) ) ? $atts['width'] : '';
$height = ( is_numeric( $atts['height'] ) && ( $atts['height'] > 0 ) ) ? $atts['height'] : '';

if ( ! empty( $width ) && ! empty( $height ) ) {
	$image = fw_resize( $atts['image']['attachment_id'], $width, $height, true );
} else {
	$image = $atts['image']['url'];
}

?>

<div class="disnone uk-align-right@m" uk-grid>
	<div>
		<div class="uk-overflow-hidden uk-border-circle" >
			<img src="<?php echo $image; ?>" alt="Example image" class="uk-animation-reverse uk-transform-origin-top-right" uk-scrollspy="cls: uk-animation-kenburns; repeat: true">
		</div>
	</div>
</div>










