<?php


namespace Corals\StockQty\Block\Adminhtml\System\Config;


class Introduction extends \Magento\Config\Block\System\Config\Form\Fieldset
{

    /**
     * @var string
     */
    private $content;

    /**
     * Render fieldset html
     *
     * @param AbstractElement $element
     * @return string
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $html ='';
        $html = $this->_getHeaderHtml($element);
        $this->setContent(__('
        <p>
        <strong>Corals provides a top rated Magento Development Service. We can help with any features, functions of Magento.
        <br>If you need assistance, please visit <a target="_blank" href="https://www.Corals.com">https://www.Corals.com</a> to review our service</strong>
        </p>
        <style>
        #stockqty_Corals_introduction{display: block !important;background: #f8f8f8;padding: 15px;}
        #stockqty_Corals_introduction-head::before{content:"";}
        </style>
        '));

        $html .= $this->getContent();
        $html .= $this->_getFooterHtml($element);
        $html = preg_replace('(onclick=\"Fieldset.toggleCollapse.*?\")', '', $html);
        return $html;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
}
