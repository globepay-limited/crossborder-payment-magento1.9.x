<?php

class Globepay_Payment_Model extends Mage_Payment_Model_Method_Abstract {
    protected $_code          = 'globepay';
    protected $_formBlockType = 'globepay/form';
    //protected $_infoBlockType = 'globepay/info';

    protected $_isGateway               = false;
    protected $_canAuthorize            = true;
    protected $_canCapture              = true;
    protected $_canVoid                 = false;
    protected $_canUseInternal          = false;
    protected $_canUseCheckout          = true;
    protected $_canUseForMultishipping  = false;
    protected $_canRefund               = false;
   // protected $_isInitializeNeeded      = true;
    /**
     * Get order model
     *
     * @return Mage_Sales_Model_Order
     */
    public function getOrder()
    {
        return $this->getInfoInstance()->getOrder();
    }

    public function getCheckout() {
        return Mage::getSingleton('checkout/session');
    }

    public function getOrderPlaceRedirectUrl() {
        return Mage::getUrl('globepay/redirect', array('_secure' => true));
    }

   
    public function capture(Varien_Object $payment, $amount)
    {
        $payment->setStatus(self::STATUS_APPROVED)->setLastTransId($this->getTransactionId());

        return $this;
    }

    public function getRepayUrl($order){
        return Mage::getUrl('globepay/redirect', array('_secure' => true,'orderId'=>$order->getRealOrderId()));
    }
    
}
