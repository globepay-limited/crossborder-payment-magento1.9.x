<?php require_once 'abstract-globepayalipay-api.php';

class Globepayalipay_Payment_Block_Form extends Abstract_Magento_Globepayalipay_Api {
    /**
     * {@inheritDoc}
     * @see Abstract_Magento_Globepayalipay_Api::get_method()
     */
    public function get_method()
    {
        // TODO Auto-generated method stub
        return 'globepayalipay';
    }
    
}