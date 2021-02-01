<?php

namespace QuickPay;

use QuickPay\API\Client;
use QuickPay\API\Request;

/**
 * Class QuickPay
 *
 * @package QuickPay
 */
class QuickPay {

	use Order;

	/**
	 * Contains the QuickPay_Request object
	 *
	 * @type Request
	 * @access public
	 **/
	public $request;


	/**
	 * __construct function.
	 *
	 * Instantiates the main class.
	 * Creates a client which is passed to the request construct.
	 *
	 * @auth_string string Authentication string for QuickPay
	 *
	 * @access      public
	 */
	public function api( $auth_string = '' ) {
		$client        = new Client( $auth_string );
		$this->request = new Request( $client );
	}
}
