<?php

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

class Interface_Telescope_Les_Usines_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**************
	 * SHORTCODES *
	 **************/

	public function gestion_telescope_shortcode(){
		ob_start();
		require_once plugin_dir_path( __FILE__ ) . '/partials/interface-telescope-les-usines-public-display.php';
		$content = ob_get_clean();
		return $content;
	}
	public function gestion_telescope($atts, $content = ""){
		return do_shortcode($this->gestion_telescope_shortcode());
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/*************
		 * BOOTSTRAP *
		 *************/
		wp_enqueue_style(
			$this->plugin_name . "-bootstrap",
			"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css",
			array(),
			'4.3.1',
			'all'
		);

		wp_enqueue_style(
			$this->plugin_name . "-fontawesome",
			"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
			array(),
			'4.7.0',
			'all'
		);

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/interface-telescope-les-usines-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/*************
		 * BOOTSTRAP *
		 *************/
		wp_enqueue_script(
			$this->plugin_name . "-popper",
			"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js",
			array('jquery'),
			'1.14.7',
			false
		);

		wp_enqueue_script(
			$this->plugin_name . "-bootsrap",
			"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js",
			array('jquery'),
			'4.3.1',
			false
		);

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/interface-telescope-les-usines-public.js', array( 'jquery' ), $this->version, false );

		/** Form submit */

		wp_localize_script(
			$this->plugin_name,
			'ajax_interface_telescope_les_usines_submit',
			array(
				'url' => admin_url( 'admin-ajax.php' ),
				'nonce' => wp_create_nonce('ajax-nonce')
			)
		);
	}

}
