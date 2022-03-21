<?php

use QuickPay\Catalog\Controller;

/**
 * Class ControllerExtensionPaymentQuickPayAnydaysplit
 */
class ControllerExtensionPaymentQuickPayAnydaysplit extends \Controller {

	use Controller;

	/**
	 * The name of the instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'quickpay_anydaysplit';
	}
}