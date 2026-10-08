<?php
/**
 * Optional integrations with companion plugins.
 *
 * Everything here only runs when the plugin's block is registered, so the
 * theme works the same with or without the plugin.
 *
 * - Marketing Blocks by Bertuuk (create-block/getresponse-form-block):
 *   Tulip styles for the email form and two patterns that use it.
 *
 * @package Tulip
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Whether a block type is registered.
 *
 * @param string $name Block name.
 * @return bool
 */
function tulip_has_block( $name ) {
	return WP_Block_Type_Registry::get_instance()->is_registered( $name );
}

/**
 * Markup for a GetResponse form block with Tulip defaults.
 *
 * Colours are left empty on purpose: Tulip paints the form from the
 * surrounding section (see assets/css/plugins/marketing-blocks.css).
 *
 * @param string $id Unique id for the form on the page.
 * @return string Block markup.
 */
function tulip_getresponse_form_markup( $id ) {
	$label  = _x( 'Your email', 'email form label', 'tulip' );
	$button = _x( 'Join the waitlist', 'email form button', 'tulip' );
	$terms  = _x( 'I accept the privacy policy', 'email form consent checkbox', 'tulip' );

	$attrs = array(
		'inputLabelColor'        => '',
		'inputBackgroundColor'   => '',
		'inputBorderColor'       => '',
		'inputTextColor'         => '',
		'buttonBackgroundColor'  => '',
		'buttonBorderColor'      => '',
		'buttonTextColor'        => '',
		'uniqueId'               => $id,
		'campaignToken'          => '',
		'inputLabel'             => $label,
		'buttonLabel'            => $button,
		'termsAndConditionsText' => $terms,
		'hasRowAlign'            => true,
		'hasLabel'               => true,
	);

	$e = 'alone-input-email_' . $id;
	$c = 'terms-conditions_' . $id;

	return '<!-- wp:create-block/getresponse-form-block ' . wp_json_encode( $attrs, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . ' -->'
		. '<div class="wp-block-create-block-getresponse-form-block"><form class="lead-mail-form" data-rowalign="true" id="' . esc_attr( $id ) . '"><div class="form-group form-group__first">'
		. '<div class="form-field form-field__email-label" data-label="true"><label for="' . esc_attr( $e ) . '" style="color:">' . esc_html( $label ) . '</label></div>'
		. '<div class="form-field form-field__email alone-input-email" data-label="true"><input type="text" name="email" class="is-light" id="' . esc_attr( $e ) . '" autocomplete="email" style="background-color:;color:;border-color:"/><div class="sr-only" aria-hidden="true"><label for="' . esc_attr( $e ) . '-honeypot">Deja este campo vacío:</label><input id="' . esc_attr( $e ) . '-honeypot" type="text" name="user_comment" tabindex="-1" autocomplete="off"/></div></div>'
		. '<div class="form-field form-field__hidden-fields"><input name="custom_url_seguimiento" type="text"/><input type="hidden" name="campaign_token" value=""/><input type="hidden" name="thankyou_url" value=""/><input type="hidden" name="start_day" value="0"/><input type="hidden" name="start_time" id="start_time"/></div>'
		. '<div class="form-field form-field__terms-conditions"><input type="checkbox" class="dahlia-checkbox-input" id="' . esc_attr( $c ) . '" name="terms-and-conditions" required style="background-color:;color:;border-color:"/><label class="dahlia-checkbox-label" for="' . esc_attr( $c ) . '" style="color:"><span class="dahlia-checkbox-box" aria-hidden="true" style="background-color:;border-color:"><span class="dahlia-tick" style="border-color:"></span></span><span class="dahlia-checkbox-text">' . esc_html( $terms ) . '</span></label></div>'
		. '<div class="form-field form-field__submit-button"><input class="g-recaptcha" data-callback="onSubmit" data-action="submit" data-id="' . esc_attr( $id ) . '" data-sitekey="" type="button" value="' . esc_attr( $button ) . '" style="background-color:;color:;border-color:"/></div>'
		. '</div><div class="form-error-region" aria-live="assertive" aria-atomic="true" style="color:"></div></form><script src="https://www.google.com/recaptcha/api.js?render="></script></div>'
		. '<!-- /wp:create-block/getresponse-form-block -->';
}

/**
 * Register Tulip styles and patterns for the GetResponse form.
 */
function tulip_marketing_blocks_integration() {
	if ( ! tulip_has_block( 'create-block/getresponse-form-block' ) ) {
		return;
	}

	$theme = wp_get_theme();
	wp_enqueue_block_style(
		'create-block/getresponse-form-block',
		array(
			'handle' => 'tulip-marketing-blocks',
			'src'    => get_theme_file_uri( 'assets/css/plugins/marketing-blocks.css' ),
			'path'   => get_theme_file_path( 'assets/css/plugins/marketing-blocks.css' ),
			'ver'    => $theme->get( 'Version' ),
		)
	);

	$patterns = array(
		'hero-form' => array(
			'title'       => _x( 'Hero with email form', 'pattern title', 'tulip' ),
			'description' => _x( 'Opening section with heading, intro, an email signup form and an image. Needs Marketing Blocks.', 'pattern description', 'tulip' ),
			'categories'  => array( 'tulip', 'banner' ),
			'keywords'    => array( 'hero', 'email', 'signup', 'waitlist', 'form' ),
		),
		'cta-form'  => array(
			'title'       => _x( 'Closing call to action with email form', 'pattern title', 'tulip' ),
			'description' => _x( 'Very large heading next to an email signup form, on a dark background. Needs Marketing Blocks.', 'pattern description', 'tulip' ),
			'categories'  => array( 'tulip', 'call-to-action' ),
			'keywords'    => array( 'cta', 'email', 'signup', 'waitlist', 'form' ),
		),
	);

	foreach ( $patterns as $slug => $args ) {
		ob_start();
		include get_theme_file_path( 'inc/patterns/' . $slug . '.php' );
		$args['content']       = ob_get_clean();
		$args['viewportWidth'] = 1440;
		register_block_pattern( 'tulip/' . $slug, $args );
	}
}
add_action( 'init', 'tulip_marketing_blocks_integration', 20 );
