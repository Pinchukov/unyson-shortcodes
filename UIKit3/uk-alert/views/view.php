<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} ?>

<?php
$custom_message = ( isset( $atts['message'] ) && $atts['message'] ) ? '' . $atts['message'] . '</div>' : '';
$custom_style = ( isset( $atts['style'] ) && $atts['style'] ) ? ' class="' . $atts['style'] . '" uk-alert' : '';
$custom_close = ( isset( $atts['close'] ) && $atts['close'] ) ? '' . $atts['close'] . '' : '';

$custom_stylewrap = ( isset( $atts['customstylewrap'] ) && $atts['customstylewrap'] ) ? ' style="' . $atts['customstylewrap'] . '"' : '';
?>

<div<?php echo $custom_stylewrap; ?><?php echo $custom_style; ?><?php echo $custom_close; ?>
<?php echo $custom_message; ?>

