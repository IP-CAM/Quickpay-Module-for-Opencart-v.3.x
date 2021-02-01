<?php

use QuickPay\Catalog\Model;

/**
 * Class ModelExtensionPaymentQuickPayMobilepay
 */
class ModelExtensionPaymentQuickPayMobilepay extends \Model {

	use Model;

	public function getMethod( $address, $total ) {
		return $this->getMethodData( $address, $total, '_mobilepay'  );
	}

	/**
	 * Return the name of the payment instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'quickpay_mobilepay';
	}

	/**
	 * Return gateway specific payment link data
	 *
	 * @return array
	 */
	public function getPaymentLinkData() {
		return [
			'payment_methods' => 'mobilepay',
		];
	}

	/**
	 * Returns gateway specific payment data
	 *
	 * @return array
	 */
	public function getPaymentData() {
		return [
            'payment_methods' => 'mobilepay',
            'telephone' => '+38057294432',
		];
	}
}
