<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php $card_id = uniqid('fw-card-'); ?>

<?php

$radio_view = ( isset( $atts['radioview'] ) && $atts['radioview'] ) ? '' . $atts['radioview'] . '' : '';
$p_t = ( isset( $atts['pt'] ) && $atts['pt'] ) ? ' ' . $atts['pt'] . '' : '';
$p_b = ( isset( $atts['pb'] ) && $atts['pb'] ) ? ' ' . $atts['pb'] . '' : '';
$my_class = ( isset( $atts['myclass'] ) && $atts['myclass'] ) ? ' ' . $atts['myclass'] . '' : '';


?>

<div class="<?php echo $radio_view; ?><?php echo $p_t; ?><?php echo $p_b; ?><?php echo $my_class; ?>" id="<?php echo esc_attr($card_id); ?>">

	<?php foreach ($atts['cards'] as $card): ?>
		<div class="card">
			<?php
			$card_image_url = !empty($card['card_img']['url'])
			? $card['card_img']['url']
			: fw_get_framework_directory_uri('/static/img/no-image.png');
			?>
			<img class="card-img-top" src="<?php echo esc_attr($card_image_url); ?>" alt="<?php echo $card['card_title']; ?>">
			<div class="card-body">

				<<?php echo $card['title_number']; ?> class="card-title"><?php echo $card['card_title']; ?></<?php echo $card['title_number']; ?>>

				<?php echo $price_last = ( isset( $card['card_price'] ) && $card['card_price'] ) ? '<p class="card-text h6">Цена: <span class="badge badge-success">' . $card['card_price'] . ' &#8381;</span></p>' : ''; ?>

				<?php echo $text_last = ( isset( $card['card_content'] ) && $card['card_content'] ) ? '<p class="card_content">' . $card['card_content'] . '</p>' : ''; ?>

			</div>

			<?php echo $text2_last = ( isset( $card['card_footer'] ) && $card['card_footer'] ) ? '' . $card['card_footer'] . '' : ''; ?>


		</div><!--//card-->

	<?php endforeach; ?>


</div><!--//card-....-->


