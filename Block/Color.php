<?php

namespace Meetanshi\CookieNotice\Block;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Registry;
use Magento\Framework\Data\Form\Element\AbstractElement;

class Color extends Field
{
    protected $_coreRegistry;

    public function __construct(
        Context $context,
        Registry $coreRegistry,
        array $data = []
    )
    {
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context, $data);
    }

    protected function _getElementHtml(AbstractElement $element)
    {
        $base = $this->getBaseUrl();
        $html = $element->getElementHtml();
        $cpPath = $this->getViewFileUrl('Meetanshi_CookieNotice::js');
        if ( !$this->_coreRegistry->registry('colorpicker_loaded') ) {
            $html .= '<script type="text/javascript" src="' . $cpPath . '/' . 'jscolor.js"></script>';
            $this->_coreRegistry->registry('colorpicker_loaded', 1);
        }
        $html .= '<script type="text/javascript">
                var el = document.getElementById("' . $element->getHtmlId() . '");
                el.className = el.className + " jscolor{hash:true}";
            </script>';

        return $html;
    }
}
