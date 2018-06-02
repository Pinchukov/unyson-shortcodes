<?php if (!defined('FW')) die( 'Forbidden' ); ?>

<?php 
$color_class = !empty($atts['color']) ? "{$atts['color']}" : '';

$custom_class = ( isset( $atts['customclass'] ) && $atts['customclass'] ) ? ' ' . $atts['customclass'] . '' : '';
?>
<p>
	<a href="<?php echo esc_attr($atts['link']) ?>" target="<?php echo esc_attr($atts['target']) ?>" class="rounded-0 btn btn-<?php echo esc_attr($color_class); ?><?php echo $custom_class; ?>"><?php echo $atts['label']; ?>
	</a>
</p>