<?php

namespace Meetanshi\CookieNotice\Block;

use Meetanshi\CookieNotice\Model\System\Config\Source\Bar\BarPosition;
use Meetanshi\CookieNotice\Helper\Data;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
use Magento\Store\Model\StoreManagerInterface;

/**
 * Class CookieNotice
 * @package Meetanshi\CookieNotice\Block
 */
class CookieNotice extends Template implements BlockInterface
{
    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;
    /**
     * @var Data
     */
    protected $moduleHelper;

    /**
     * CookieNotice constructor.
     * @param Template\Context $context
     * @param Data $moduleHelper
     * @param StoreManagerInterface $storeManager
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Data $moduleHelper,
        StoreManagerInterface $storeManager,
        array $data = []
    ){
        $this->storeManager = $storeManager;
        parent::__construct($context, $data);
        $this->moduleHelper = $moduleHelper;
    }

    /**
     * @return mixed
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getUrls()
    {
        return $this->storeManager->getStore()->getBaseUrl();
    }

    /**
     * @param array $arr
     * @return $this|void
     */
    public function addData(array $arr)
    {
    }

    /**
     * @param array|string $key
     * @param null $value
     * @return $this|void
     */
    public function setData($key, $value = null)
    {
    }

    /**
     * @return mixed
     */
    public function enableDisable()
    {
        return $this->moduleHelper->enableDisable();
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->moduleHelper->getType();
    }

    /**
     * @return mixed
     */
    public function getBarPosition()
    {
        return $this->moduleHelper->getBarPosition();
    }

    /**
     * @return mixed
     */
    public function getBoxPosition()
    {
        return $this->moduleHelper->getBoxPosition();
    }

    /**
     * @return mixed
     */
    public function getBehaviour()
    {
        return $this->moduleHelper->getBehaviour();
    }

    /**
     * @return mixed
     */
    public function getAutohide()
    {
        return $this->moduleHelper->getAutohide();
    }

    /**
     * @return mixed
     */
    public function getAutoAccept()
    {
        return $this->moduleHelper->getAutoAccept();
    }

    /**
     * @return mixed
     */
    public function getAutoExpire()
    {
        return $this->moduleHelper->getAutoExpire();
    }

    /**
     * @return mixed
     */
    public function getShow()
    {
        return $this->moduleHelper->getShow();
    }

    /**
     * @return mixed
     */
    public function getCustomMessage()
    {
        return $this->moduleHelper->getCustomMessage();
    }

    /**
     * @return mixed
     */
    public function getCustomMoreInfo()
    {
        return $this->moduleHelper->getCustomMoreInfo();
    }

    /**
     * @return mixed
     */
    public function cmsPage()
    {
        return $this->moduleHelper->cmsPage();
    }

    /**
     * @return mixed
     */
    public function getCustomAccept()
    {
        return $this->moduleHelper->getCustomAccept();
    }

    /**
     * @return mixed
     */
    public function getCustomDecline()
    {
        return $this->moduleHelper->getCustomDecline();
    }

    /**
     * @return mixed
     */
    public function acceptButtonBackgroundColor()
    {
        return $this->moduleHelper->acceptButtonBackgroundColor();
    }

    /**
     * @return mixed
     */
    public function acceptButtonColor()
    {
        return $this->moduleHelper->acceptButtonColor();
    }

    /**
     * @return mixed
     */
    public function privacyPolicyColor()
    {
        return $this->moduleHelper->privacyPolicyColor();
    }

    /**
     * @return mixed
     */
    public function closeButtonBackgroundColor()
    {
        return $this->moduleHelper->closeButtonBackgroundColor();
    }

    /**
     * @return mixed
     */
    public function onscroll()
    {
        return $this->moduleHelper->onscroll();
    }

    /**
     * @return mixed
     */
    public function newTab()
    {
        return $this->moduleHelper->newTab();
    }

    /**
     * @return mixed
     */
    public function closeButtonColor()
    {
        return $this->moduleHelper->closeButtonColor();
    }

    /**
     * @return mixed
     */
    public function headerBackgroundColor()
    {
        return $this->moduleHelper->headerBackgroundColor();
    }

    /**
     * @return mixed
     */
    public function headerFontColor()
    {
        return $this->moduleHelper->headerFontColor();
    }

    /**
     * @return mixed
     */
    public function modelBorder()
    {
        return $this->moduleHelper->modelBorder();
    }

    /**
     * @return mixed
     */
    public function modelBorderColor()
    {
        return $this->moduleHelper->modelBorderColor();
    }

    /**
     * @return mixed
     */
    public function headerBottomBorder()
    {
        return $this->moduleHelper->headerBottomBorder();
    }

    /**
     * @return mixed
     */
    public function headerBottomBorderColor()
    {
        return $this->moduleHelper->headerBottomBorderColor();
    }

    /**
     * @return mixed
     */
    public function containerTopBorder()
    {
        return $this->moduleHelper->containerTopBorder();
    }

    /**
     * @return mixed
     */
    public function policyBackgroundColor()
    {
        return $this->moduleHelper->policyBackgroundColor();
    }

    /**
     * @return mixed
     */
    public function containerTopBorderColor()
    {
        return $this->moduleHelper->containerTopBorderColor();
    }

    /**
     * @return mixed
     */
    public function headerTextFontFamily()
    {
        return $this->moduleHelper->headerTextFontFamily();
    }

    /**
     * @return mixed
     */
    public function modelTitle()
    {
        return $this->moduleHelper->modelTitle();
    }

    /**
     * @return mixed
     */
    public function modelTitleColor()
    {
        return $this->moduleHelper->modelTitleColor();
    }

    /**
     * @return mixed
     */
    public function modelTitleFontSize()
    {
        return $this->moduleHelper->modelTitleFontSize();
    }

    /**
     * @return mixed
     */
    public function modelMessageSize()
    {
        return $this->moduleHelper->modelMessageSize();
    }

    /**
     * @return mixed
     */
    public function modelTextAlign()
    {
        return $this->moduleHelper->modelTextAlign();
    }

    /**
     * @return string
     */
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
