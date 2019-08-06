<?php

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

class Interface_Telescope_Les_Usines_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public function activate() {
		//$this->createTelescopeFrontPage();
		Interface_Telescope_Les_Usines_Activator::createTelescopeFrontPage();
	}

	public static function createTelescopeFrontPage() {
		global $wpdb;

		$the_page_title = 'Gestion du téléscope';
		$the_page_name = 'gestion-du-telescope';

		delete_option("gestion_du_telescope_page_id");
		add_option("gestion_du_telescope_page_id", '0', '', 'yes');

		$the_page = get_page_by_title( $the_page_title );

		if ( ! $the_page ) {
			$_p = array();
			$_p['post_title'] = $the_page_title;
			$_p['post_name'] = $the_page_name;
			$_p['post_content'] = do_shortcode("[gestion_telescope]");
			$_p['post_status'] = 'publish';
			$_p['post_type'] = 'page';
			$_p['comment_status'] = 'closed';
			$_p['ping_status'] = 'closed';
			$_p['post_category'] = array(1);
			$the_page_id = wp_insert_post( $_p );
		}
		else {
			$the_page_id = $the_page->ID;
			$the_page->post_status = 'publish';
			$the_page_id = wp_update_post( $the_page );
		}
		delete_option( 'gestion_du_telescope_page_id' );
		add_option( 'gestion_du_telescope_page_id', $the_page_id );
	}


}
