<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php $color_class = !empty($atts['color']) ? "{$atts['color']}" : ''; ?>
<p uk-margin>
	<a href="<?php echo esc_attr($atts['link']) ?>" target="<?php echo esc_attr($atts['target']) ?>" class="uk-button uk-button-<?php echo esc_attr($color_class); ?>"><?php echo $atts['label']; ?>
	</a>
</p>