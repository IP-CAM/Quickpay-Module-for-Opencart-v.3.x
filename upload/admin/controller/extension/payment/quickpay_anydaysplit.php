<?php

use QuickPay\Admin\Installer;
use QuickPay\Admin\Settings;
use QuickPay\Instance;

/**
 * Class ControllerExtensionPaymentQuickpayAnydaysplit
 */
class ControllerExtensionPaymentQuickpayAnydaysplit extends Controller {

	use Instance;
	use Installer;
	use Settings;

	/**
	 * Return the name of the payment instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'quickpay_anydaysplit';
	}

	/**
	 * @return array
	 */
	protected function getInstanceSettingsFields() {
		return [];
	}

	/**
	 * @return array
	 */
	protected function getInstanceValidationFields() {
		return [];
	}
}