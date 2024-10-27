<?php
/**
 * Created by Corals.com
 * Date: 9/7/2018
 */

namespace Corals\StockQty\Block\Catalog\Product;


class View extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magento\Framework\Registry
     */
    protected $registry;
    /**
     * @var \Corals\StockQty\Helper\Config
     */
    protected $helperConfig;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Corals\StockQty\Helper\Config $helperConfig,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        $this->registry     = $registry;
        $this->helperConfig = $helperConfig;
        parent::__construct($context, $data);
    }


    /**
     * @return \Corals\StockQty\Helper\Config
     */
    public function getHelperConfig()
    {
        return $this->helperConfig;
    }

    /**
     * @return \Magento\Catalog\Model\Product
     */
    public function getProduct()
    {
        return $this->registry->registry('product');
    }

}
