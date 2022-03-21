<?php

use QuickPay\Catalog\Model;

/**
 * Class ModelExtensionPaymentQuickPaySofort
 */
class ModelExtensionPaymentQuickPaySofort extends \Model {

	use Model;

	public function getMethod( $address, $total ) {
		return $this->getMethodData( $address, $total, '_sofort'  );
	}

	/**
	 * Return the name of the payment instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'quickpay_sofort';
	}

	/**
	 * Return gateway specific payment link data
	 *
	 * @return array
	 */
	public function getPaymentLinkData() {
		return [
			'payment_methods' => 'sofort',
		];
	}

	/**
	 * Returns gateway specific payment data
	 *
	 * @return array
	 */
	public function getPaymentData() {
		return [
		];
	}
}
