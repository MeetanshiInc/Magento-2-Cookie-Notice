<?php

namespace Meetanshi\CookieNotice\Block;

use Magento\Framework\View\Element\Template;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Widget\Block\BlockInterface;
use Meetanshi\CookieNotice\Helper\Data;
use Meetanshi\CookieNotice\Model\System\Config\Source\Bar\BarPosition;

/**
 * Frontend block for rendering the cookie notice widget.
 *
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.UnusedFormalParameter)
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
     *
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
    ) {
        $this->storeManager = $storeManager;
        parent::__construct($context, $data);
        $this->moduleHelper = $moduleHelper;
    }

    /**
     * Get the current store base URL.
     *
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     *
     * @return string
     */
    public function getUrls()
    {
        return $this->storeManager->getStore()->getBaseUrl();
    }

    /**
     * Override addData to prevent widget data injection.
     *
     * @param array $arr
     */
    public function addData(array $arr)
    {
        // Intentionally empty — prevents widget from overriding block data
    }

    /**
     * Override setData to prevent widget data injection.
     *
     * @param array|string $key
     * @param mixed $value
     */
    public function setData($key, $value = null)
    {
        // Intentionally empty — prevents widget from overriding block data
    }

    /**
     * Check if cookie notice is enabled.
     *
     * @return mixed
     */
    public function enableDisable()
    {
        return $this->moduleHelper->enableDisable();
    }

    /**
     * Get cookie notice type.
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->moduleHelper->getType();
    }

    /**
     * Get bar position setting.
     *
     * @return mixed
     */
    public function getBarPosition()
    {
        return $this->moduleHelper->getBarPosition();
    }

    /**
     * Get box position setting.
     *
     * @return mixed
     */
    public function getBoxPosition()
    {
        return $this->moduleHelper->getBoxPosition();
    }

    /**
     * Get behaviour setting.
     *
     * @return mixed
     */
    public function getBehaviour()
    {
        return $this->moduleHelper->getBehaviour();
    }

    /**
     * Get auto hide delay value.
     *
     * @return mixed
     */
    public function getAutohide()
    {
        return $this->moduleHelper->getAutohide();
    }

    /**
     * Get auto accept delay value.
     *
     * @return mixed
     */
    public function getAutoAccept()
    {
        return $this->moduleHelper->getAutoAccept();
    }

    /**
     * Get cookie expiration value.
     *
     * @return mixed
     */
    public function getAutoExpire()
    {
        return $this->moduleHelper->getAutoExpire();
    }

    /**
     * Get show setting (default or custom).
     *
     * @return mixed
     */
    public function getShow()
    {
        return $this->moduleHelper->getShow();
    }

    /**
     * Get custom message text.
     *
     * @return mixed
     */
    public function getCustomMessage()
    {
        return $this->moduleHelper->getCustomMessage();
    }

    /**
     * Get custom more info link text.
     *
     * @return mixed
     */
    public function getCustomMoreInfo()
    {
        return $this->moduleHelper->getCustomMoreInfo();
    }

    /**
     * Get CMS page identifier.
     *
     * @return mixed
     */
    public function cmsPage()
    {
        return $this->moduleHelper->cmsPage();
    }

    /**
     * Get custom accept button text.
     *
     * @return mixed
     */
    public function getCustomAccept()
    {
        return $this->moduleHelper->getCustomAccept();
    }

    /**
     * Get custom decline button text.
     *
     * @return mixed
     */
    public function getCustomDecline()
    {
        return $this->moduleHelper->getCustomDecline();
    }

    /**
     * Get accept button background color.
     *
     * @return mixed
     */
    public function acceptButtonBackgroundColor()
    {
        return $this->moduleHelper->acceptButtonBackgroundColor();
    }

    /**
     * Get accept button text color.
     *
     * @return mixed
     */
    public function acceptButtonColor()
    {
        return $this->moduleHelper->acceptButtonColor();
    }

    /**
     * Get privacy policy link color.
     *
     * @return mixed
     */
    public function privacyPolicyColor()
    {
        return $this->moduleHelper->privacyPolicyColor();
    }

    /**
     * Get close button background color.
     *
     * @return mixed
     */
    public function closeButtonBackgroundColor()
    {
        return $this->moduleHelper->closeButtonBackgroundColor();
    }

    /**
     * Get on scroll setting.
     *
     * @return mixed
     */
    public function onscroll()
    {
        return $this->moduleHelper->onscroll();
    }

    /**
     * Get new tab target setting.
     *
     * @return mixed
     */
    public function newTab()
    {
        return $this->moduleHelper->newTab();
    }

    /**
     * Get close button text color.
     *
     * @return mixed
     */
    public function closeButtonColor()
    {
        return $this->moduleHelper->closeButtonColor();
    }

    /**
     * Get header background color.
     *
     * @return mixed
     */
    public function headerBackgroundColor()
    {
        return $this->moduleHelper->headerBackgroundColor();
    }

    /**
     * Get header font color.
     *
     * @return mixed
     */
    public function headerFontColor()
    {
        return $this->moduleHelper->headerFontColor();
    }

    /**
     * Get model border setting.
     *
     * @return mixed
     */
    public function modelBorder()
    {
        return $this->moduleHelper->modelBorder();
    }

    /**
     * Get model border color.
     *
     * @return mixed
     */
    public function modelBorderColor()
    {
        return $this->moduleHelper->modelBorderColor();
    }

    /**
     * Get header bottom border setting.
     *
     * @return mixed
     */
    public function headerBottomBorder()
    {
        return $this->moduleHelper->headerBottomBorder();
    }

    /**
     * Get header bottom border color.
     *
     * @return mixed
     */
    public function headerBottomBorderColor()
    {
        return $this->moduleHelper->headerBottomBorderColor();
    }

    /**
     * Get container top border setting.
     *
     * @return mixed
     */
    public function containerTopBorder()
    {
        return $this->moduleHelper->containerTopBorder();
    }

    /**
     * Get policy button background color.
     *
     * @return mixed
     */
    public function policyBackgroundColor()
    {
        return $this->moduleHelper->policyBackgroundColor();
    }

    /**
     * Get container top border color.
     *
     * @return mixed
     */
    public function containerTopBorderColor()
    {
        return $this->moduleHelper->containerTopBorderColor();
    }

    /**
     * Get header text font family.
     *
     * @return mixed
     */
    public function headerTextFontFamily()
    {
        return $this->moduleHelper->headerTextFontFamily();
    }

    /**
     * Get model title text.
     *
     * @return mixed
     */
    public function modelTitle()
    {
        return $this->moduleHelper->modelTitle();
    }

    /**
     * Get model title color.
     *
     * @return mixed
     */
    public function modelTitleColor()
    {
        return $this->moduleHelper->modelTitleColor();
    }

    /**
     * Get model title font size.
     *
     * @return mixed
     */
    public function modelTitleFontSize()
    {
        return $this->moduleHelper->modelTitleFontSize();
    }

    /**
     * Get model message font size.
     *
     * @return mixed
     */
    public function modelMessageSize()
    {
        return $this->moduleHelper->modelMessageSize();
    }

    /**
     * Get model text alignment.
     *
     * @return mixed
     */
    public function modelTextAlign()
    {
        return $this->moduleHelper->modelTextAlign();
    }

    /**
     * Render block HTML only when conditions are met.
     *
     * @return string
     */
    public function toHtml()
    {
        if (!$this->moduleHelper->enableDisable() ||
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
