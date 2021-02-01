<?php

use QuickPay\Catalog\Model as CatalogModel;
use QuickPay\Statuses;
use \QuickPay\Catalog\Recurring\Model as CatalogModelRecurring;
/**
 * Class ModelExtensionPaymentQuickPay
 */
class ModelExtensionPaymentQuickPay extends \Model implements Statuses {

	use CatalogModel;
	use CatalogModelRecurring;

	/**
	 * Return the name of the payment instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'quickpay';
	}

	/**
	 * Return gateway specific payment link data
	 *
	 * @return array
	 */
	public function getPaymentLinkData() {
		return [
			'payment_methods' => $this->instanceConfig( 'payment_methods' ),
			'auto_fee'        => $this->instanceConfig( 'autofee' ),
			'auto_capture'    => $this->instanceConfig( 'autocapture' ),
			'branding_id'     => $this->instanceConfig( 'branding_id' ),
		];
	}

	/**
	 * Returns gateway specific payment data
	 *
	 * @return array
	 */
	public function getPaymentData() {
		return [
			'text_on_statement' => $this->instanceConfig( 'text_on_statement' ),
		];
	}
}
