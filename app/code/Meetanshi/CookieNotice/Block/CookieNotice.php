<?php

namespace Meetanshi\CookieNotice\Block;

use Meetanshi\CookieNotice\Model\System\Config\Source\Bar\BarPosition;
use Meetanshi\CookieNotice\Helper\Data;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class CookieNotice extends Template implements BlockInterface
{
    protected $storeManager;
    protected $moduleHelper;

    public function __construct(
        Template\Context $context,
        Data $moduleHelper,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->moduleHelper = $moduleHelper;
    }

    public function addData(array $arr)
    {
    }

    public function setData($key, $value = null)
    {
    }

    public function enableDisable()
    {
        return $this->moduleHelper->enableDisable();
    }

    public function getType()
    {
        return $this->moduleHelper->getType();
    }

    public function getBarPosition()
    {
        return $this->moduleHelper->getBarPosition();
    }

    public function getBoxPosition()
    {
        return $this->moduleHelper->getBoxPosition();
    }

    public function getBehaviour()
    {
        return $this->moduleHelper->getBehaviour();
    }

    public function getAutohide()
    {
        return $this->moduleHelper->getAutohide();
    }

    public function getAutoAccept()
    {
        return $this->moduleHelper->getAutoAccept();
    }

    public function getAutoExpire()
    {
        return $this->moduleHelper->getAutoExpire();
    }

    public function getShow()
    {
        return $this->moduleHelper->getShow();
    }

    public function getCustomMessage()
    {
        return $this->moduleHelper->getCustomMessage();
    }

    public function getCustomMoreInfo()
    {
        return $this->moduleHelper->getCustomMoreInfo();
    }

    public function cmsPage()
    {
        return $this->moduleHelper->cmsPage();
    }

    public function getCustomAccept()
    {
        return $this->moduleHelper->getCustomAccept();
    }

    public function getCustomDecline()
    {
        return $this->moduleHelper->getCustomDecline();
    }

    public function acceptButtonBackgroundColor()
    {
        return $this->moduleHelper->acceptButtonBackgroundColor();
    }

    public function acceptButtonColor()
    {
        return $this->moduleHelper->acceptButtonColor();
    }

    public function privacyPolicyColor()
    {
        return $this->moduleHelper->privacyPolicyColor();
    }

    public function closeButtonBackgroundColor()
    {
        return $this->moduleHelper->closeButtonBackgroundColor();
    }

    public function onscroll()
    {
        return $this->moduleHelper->onscroll();
    }

    public function newTab()
    {
        return $this->moduleHelper->newTab();
    }

    public function closeButtonColor()
    {
        return $this->moduleHelper->closeButtonColor();
    }

    public function headerBackgroundColor()
    {
        return $this->moduleHelper->headerBackgroundColor();
    }

    public function headerFontColor()
    {
        return $this->moduleHelper->headerFontColor();
    }

    public function modelBorder()
    {
        return $this->moduleHelper->modelBorder();
    }

    public function modelBorderColor()
    {
        return $this->moduleHelper->modelBorderColor();
    }

    public function headerBottomBorder()
    {
        return $this->moduleHelper->headerBottomBorder();
    }

    public function headerBottomBorderColor()
    {
        return $this->moduleHelper->headerBottomBorderColor();
    }

    public function containerTopBorder()
    {
        return $this->moduleHelper->containerTopBorder();
    }

    public function policyBackgroundColor()
    {
        return $this->moduleHelper->policyBackgroundColor();
    }

    public function containerTopBorderColor()
    {
        return $this->moduleHelper->containerTopBorderColor();
    }

    public function headerTextFontFamily()
    {
        return $this->moduleHelper->headerTextFontFamily();
    }

    public function modelTitle()
    {
        return $this->moduleHelper->modelTitle();
    }

    public function modelTitleColor()
    {
        return $this->moduleHelper->modelTitleColor();
    }

    public function modelTitleFontSize()
    {
        return $this->moduleHelper->modelTitleFontSize();
    }

    public function modelMessageSize()
    {
        return $this->moduleHelper->modelMessageSize();
    }

    public function modelTextAlign()
    {
        return $this->moduleHelper->modelTextAlign();
    }

    public function toHtml()
    {
        if ( !$this->moduleHelper->enableDisable() ||
            ($this->getNameInLayout() == 'meetanshi_cookienotice_top'
                && $this->moduleHelper->getBarPosition() != BarPosition::TOP)
            || ($this->getNameInLayout() == 'meetanshi_cookienotice_bottom'
                && $this->moduleHelper->getBarPosition() != BarPosition::BOTTOM)
        ) {
            return '';
        }
        return parent::toHtml();
    }
}
