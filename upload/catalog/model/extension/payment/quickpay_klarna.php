<?php

use QuickPay\Catalog\Model;

/**
 * Class ModelExtensionPaymentQuickPayKlarna
 */
class ModelExtensionPaymentQuickPayKlarna extends \Model {

	use Model;

	public function getMethod( $address, $total ) {
		return $this->getMethodData( $address, $total, '_klarna'  );
	}

	/**
	 * Return the name of the payment instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'quickpay_klarna';
	}

	/**
	 * Return gateway specific payment link data
	 *
	 * @return array
	 */
	public function getPaymentLinkData() {
		return [
			'payment_methods' => 'klarna',
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
