<?php

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

class Interface_Telescope_Les_Usines_Submit {

	public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	public function interface_telescope_les_usines_submit() {
		$url = 'http://86.217.221.175:8081/motors/goto/eqt/deg';
		$data = [
			'd' =>  $_POST['d'],
			'h' =>  $_POST['h'],
		];

		// use key 'http' even if you send the request to https://...
		$options = array(
			'http' => array(
				'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
				'method'  => 'POST',
				'content' => http_build_query($data)
			)
		);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		if ($result === FALSE) { /* Handle error */ }

		var_dump($result);
	}
}