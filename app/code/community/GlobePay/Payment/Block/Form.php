<?php require_once 'abstract-globepay-api.php';

class Globepay_Payment_Block_Form extends Abstract_Magento_Globepay_Api{
    /**
     * {@inheritDoc}
     * @see Abstract_Magento_Globepayalipay_Api::get_method()
     */
    public function get_method()
    {
        // TODO Auto-generated method stub
        return 'globepay';
    }
    
}