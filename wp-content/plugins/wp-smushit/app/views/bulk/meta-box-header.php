<?php
/**
 * Bulk Smush meta box header.
 *
 * @package WP_Smush
 *
 * @var string $title  Title.
 */
use Smush\Core\Next_Gen\Next_Gen_Manager;

if ( ! defined( 'WPINC' ) ) {
	die;
}

$start_bulk_webp_conversion = ! empty( $_GET['smush-action'] ) && 'start-bulk-next-gen-conversion' === wp_unslash( $_GET['smush-action'] );
$next_gen_manager           = Next_Gen_Manager::get_instance();
?>

<h3 class="sui-box-title">
	<?php
	echo esc_html( $title );
	if ( $start_bulk_webp_conversion ) {
		echo ' ';
		// translators: %s - Next-Gen Conversion.
		printf( esc_html__( 'with %s Conversion', 'wp-smushit' ), esc_html( $next_gen_manager->get_active_format_name() ) );
	}
	?>
</h3>

<div class="sui-actions-right">
	<small>
		<?php
		printf(
			/* translators: %1$s - a href opening tag, %2$s - a href closing tag */
			esc_html__( 'Smush individual images via your %1$sMedia Library%2$s', 'wp-smushit' ),
			'<a href="' . esc_url( admin_url( 'upload.php' ) ) . '" title="' . esc_html__( 'Media Library', 'wp-smushit' ) . '">',
			'</a>'
		);
		?>
	</small>
</div>
