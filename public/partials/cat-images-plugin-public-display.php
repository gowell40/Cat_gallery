<?php
/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://www.linkedin.com/in/cui-bing-812868160/
 * @since      1.0.0
 *
 * @package    Cat_images_plugin
 * @subpackage Cat_images_plugin/public/partials
 */

$cat_images = json_decode( $cat_gallery['body'] );

?>

<div class="popup-gallery">
<?php foreach ( $cat_images as $index => $cat_image ) { ?>
<a href = "<?php echo esc_html( $cat_image->url ); ?>" title="Cat Image <?php echo esc_html( $index + 1 ); ?>">
<img src="<?php echo esc_html( $cat_image->url ); ?>" width="75" height="75">
</a>
<?php } ?>
</div>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->


