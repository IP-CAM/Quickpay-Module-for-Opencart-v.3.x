<?php

use QuickPay\Catalog\Model;

/**
 * Class ModelExtensionPaymentQuickPayAnydaysplit
 */
class ModelExtensionPaymentQuickPayAnydaysplit extends \Model {

	use Model;

	public function getMethod( $address, $total ) {
		return $this->getMethodData( $address, $total, '_anydaysplit'  );
	}

	/**
	 * Return the name of the payment instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'quickpay_anydaysplit';
	}

	/**
	 * Return gateway specific payment link data
	 *
	 * @return array
	 */
	public function getPaymentLinkData() {
		return [
			'payment_methods' => 'anyday-split',
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