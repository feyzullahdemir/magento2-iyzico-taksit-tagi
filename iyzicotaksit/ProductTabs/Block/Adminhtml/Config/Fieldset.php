<?php
namespace iyzicotaksit\ProductTabs\Block\Adminhtml\Config;

use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Backend\Model\Auth\Session;


class Fieldset extends \Magento\Config\Block\System\Config\Form\Fieldset
{

    private $storeManager;

    public function __construct(
        \Magento\Backend\Block\Context $context,
        Session $authSession,
        \Magento\Framework\View\Helper\Js $jsHelper,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        array $data = []
    ) {
        $this->storeManager = $storeManager;
        parent::__construct($context, $authSession, $jsHelper, $data);
    }

    public function _getHeaderHtml($element)
    {
        return 'ok';

}
}
