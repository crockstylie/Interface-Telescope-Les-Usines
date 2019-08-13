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

		$curl = curl_init();

		$data = [
			'd' =>  $_POST['d'],
			'h' =>  $_POST['h'],
		];

		//$url = 'http://86.217.221.175:8081/motors/goto/eqt/deg';
		$url = 'http://78.206.32.41:8081/motors/goto/eqt/deg';

		$method = 'POST';

		switch ($method)
		{
			case "POST":
				curl_setopt($curl, CURLOPT_POST, 1);

				if ($data)
					curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
				break;
			case "PUT":
				curl_setopt($curl, CURLOPT_PUT, 1);
				break;
			default:
				if ($data)
					$url = sprintf("%s?%s", $url, http_build_query($data));
		}

		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: multipart/form-data'));
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

		$result = curl_exec($curl);

		curl_close($curl);

		//return $result;

		//wp_send_json($result);
	}
}