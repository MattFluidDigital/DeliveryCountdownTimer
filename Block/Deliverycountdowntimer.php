<?php
namespace Fluid\DeliveryCountdownTimer\Block;

class Deliverycountdowntimer extends \Magento\Framework\View\Element\Template
{
    protected $_scopeConfig;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_scopeConfig = $scopeConfig;
    }

    public function getCountdownEnabledBasket()
    {

        return $this->_scopeConfig->getValue('deliverycountdowntimer/general/basket_active', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);

;    }

    public function getCountdownEnabledProduct()
    {
        return $this->_scopeConfig->getValue('deliverycountdowntimer/general/product_active', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getCutOfTime()
    {
        return $this->_scopeConfig->getValue('deliverycountdowntimer/general/countdown_cutoff', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getBankHolidays()
    {
        return $this->_scopeConfig->getValue('deliverycountdowntimer/general/textarea_holidays', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}