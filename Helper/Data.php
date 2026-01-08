<?php

namespace Meetanshi\CookieNotice\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Data
 * @package Meetanshi\CookieNotice\Helper
 */
class Data extends AbstractHelper
{
    /**
     *
     */
    const ENABLE_DISABLE = 'cookienotice/general/enabledisable';
    /**
     *
     */
    const TYPE = 'cookienotice/general/type';
    /**
     *
     */
    const BAR_POSITION = 'cookienotice/general/bar_position';
    /**
     *
     */
    const BOX_POSITION = 'cookienotice/general/box_position';
    /**
     *
     */
    const BEHAVIOUR = 'cookienotice/general/behaviour';
    /**
     *
     */
    const AUTO_HIDE_AFTER = 'cookienotice/general/auto_hide_after';
    /**
     *
     */
    const AUTO_ACCEPT = 'cookienotice/general/auto_accept';
    /**
     *
     */
    const EXPIRE = 'cookienotice/general/expire';
    /**
     *
     */
    const SHOW = 'cookienotice/content/show';
    /**
     *
     */
    const CUSTOM_MESSAGE = 'cookienotice/content/custom_message';
    /**
     *
     */
    const MODEL_TITLE = 'cookienotice/content/model_title';
    /**
     *
     */
    const CUSTOM_ACCEPT = 'cookienotice/content/custom_accept';
    /**
     *
     */
    const CUSTOM_CLOSE = 'cookienotice/content/custom_close';
    /**
     *
     */
    const CUSTOM_MORE_INFO = 'cookienotice/content/custom_more_info';
    /**
     *
     */
    const NEWTAB = 'cookienotice/content/newtab';
    /**
     *
     */
    const CMS_PAGE = 'cookienotice/content/cms_page';
    /**
     *
     */
    const ONSCROLL = 'cookienotice/general/onscroll';
    /**
     *
     */
    const FONT_FAMILY = 'cookienotice/popup_style/font_family';
    /**
     *
     */
    const MODEL_TEXT_ALIGN = 'cookienotice/popup_style/model_text_align';
    /**
     *
     */
    const MODEL_TITLE_SIZE = 'cookienotice/popup_style/model_title_size';
    /**
     *
     */
    const MODEL_BORDER = 'cookienotice/popup_style/model_border';
    /**
     *
     */
    const FOOTER_TOP_BORDER = 'cookienotice/popup_style/continer_top_border';
    /**
     *
     */
    const HEADER_BOTTOM_BORDER = 'cookienotice/popup_style/container_bottom_border';
    /**
     *
     */
    const MODEL_BORDER_COLOR = 'cookienotice/popup_style/container_border_color';
    /**
     *
     */
    const MODEL_MESSAGE_SIZE = 'cookienotice/popup_style/model_message_size';
    /**
     *
     */
    const HEADER_BACKGROUND_COLOR = 'cookienotice/popup_style/header_background_color';
    /**
     *
     */
    const HEADER_FONT_COLOR = 'cookienotice/popup_style/header_font_color';
    /**
     *
     */
    const HEADER_BOTTOM_BORDER_COLOR = 'cookienotice/popup_style/header_bottom_border_color';
    /**
     *
     */
    const FOOTER_TOP_BORDER_COLOR = 'cookienotice/popup_style/footer_top_border_color';
    /**
     *
     */
    const ACCEPT_BUTTON_BACKGROUND_COLOR = 'cookienotice/popup_style/accept_button_background_color';
    /**
     *
     */
    const CLOSE_BUTTON_BACKGROUND_COLOR = 'cookienotice/popup_style/close_button_background_color';
    /**
     *
     */
    const POLICY_BACKGROUND_COLOR = 'cookienotice/popup_style/policy_button_background_color';
    /**
     *
     */
    const CLOSE_BUTTON_COLOR = 'cookienotice/popup_style/close_button_color';
    /**
     *
     */
    const PRIVACY_POLICY_COLOR = 'cookienotice/popup_style/privace_policy_color';
    /**
     *
     */
    const ACCEPT_BUTTON_COLOR = 'cookienotice/popup_style/accept_button_color';
    /**
     *
     */
    const MODEL_TITLE_COLOR = 'cookienotice/popup_style/model_title_color';

    /**
     * Data constructor.
     * @param Context $context
     */
    public function __construct(
        Context $context
    ){
        parent::__construct($context);
    }

    /**
     * @return mixed
     */
    public function enableDisable()
    {
        return $this->scopeConfig->getValue(
            self::ENABLE_DISABLE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->scopeConfig->getValue(
            self::TYPE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function getBarPosition()
    {
        return $this->scopeConfig->getValue(
            self::BAR_POSITION,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function getBoxPosition()
    {
        return $this->scopeConfig->getValue(
            self::BOX_POSITION,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function getBehaviour()
    {
        return $this->scopeConfig->getValue(
            self::BEHAVIOUR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function getAutohide()
    {
        return $this->scopeConfig->getValue(
            self::AUTO_HIDE_AFTER,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function getAutoAccept()
    {
        return $this->scopeConfig->getValue(
            self::AUTO_ACCEPT,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function getAutoExpire()
    {
        return $this->scopeConfig->getValue(
            self::EXPIRE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function getShow()
    {
        return $this->scopeConfig->getValue(
            self::SHOW,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function getCustomMessage()
    {
        return $this->scopeConfig->getValue(
            self::CUSTOM_MESSAGE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function modelTitle()
    {
        return $this->scopeConfig->getValue(
            self::MODEL_TITLE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function getCustomAccept()
    {
        return $this->scopeConfig->getValue(
            self::CUSTOM_ACCEPT,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function getCustomDecline()
    {
        return $this->scopeConfig->getValue(
            self::CUSTOM_CLOSE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function newTab()
    {
        return $this->scopeConfig->getValue(
            self::NEWTAB,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function onscroll()
    {
        return $this->scopeConfig->getValue(
            self::ONSCROLL,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function getCustomMoreInfo()
    {
        return $this->scopeConfig->getValue(
            self::CUSTOM_MORE_INFO,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function cmsPage()
    {
        return $this->scopeConfig->getValue(
            self::CMS_PAGE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function headerTextFontFamily()
    {
        return $this->scopeConfig->getValue(
            self::FONT_FAMILY,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function modelTextAlign()
    {
        return $this->scopeConfig->getValue(
            self::MODEL_TEXT_ALIGN,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function modelTitleFontSize()
    {
        return $this->scopeConfig->getValue(
            self::MODEL_TITLE_SIZE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function modelBorder()
    {
        return $this->scopeConfig->getValue(
            self::MODEL_BORDER,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function containerTopBorder()
    {
        return $this->scopeConfig->getValue(
            self::FOOTER_TOP_BORDER,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function headerBottomBorder()
    {
        return $this->scopeConfig->getValue(
            self::HEADER_BOTTOM_BORDER,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function modelBorderColor()
    {
        return $this->scopeConfig->getValue(
            self::MODEL_BORDER_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function modelMessageSize()
    {
        return $this->scopeConfig->getValue(
            self::MODEL_MESSAGE_SIZE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function headerBackgroundColor()
    {
        return $this->scopeConfig->getValue(
            self::HEADER_BACKGROUND_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function headerFontColor()
    {
        return $this->scopeConfig->getValue(
            self::HEADER_FONT_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function headerBottomBorderColor()
    {
        return $this->scopeConfig->getValue(
            self::HEADER_BOTTOM_BORDER_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function containerTopBorderColor()
    {
        return $this->scopeConfig->getValue(
            self::FOOTER_TOP_BORDER_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function acceptButtonBackgroundColor()
    {
        return $this->scopeConfig->getValue(
            self::ACCEPT_BUTTON_BACKGROUND_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function closeButtonBackgroundColor()
    {
        return $this->scopeConfig->getValue(
            self::CLOSE_BUTTON_BACKGROUND_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function policyBackgroundColor()
    {
        return $this->scopeConfig->getValue(
            self::POLICY_BACKGROUND_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function closeButtonColor()
    {
        return $this->scopeConfig->getValue(
            self::CLOSE_BUTTON_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function privacyPolicyColor()
    {
        return $this->scopeConfig->getValue(
            self::PRIVACY_POLICY_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function acceptButtonColor()
    {
        return $this->scopeConfig->getValue(
            self::ACCEPT_BUTTON_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function modelTitleColor()
    {
        return $this->scopeConfig->getValue(
            self::MODEL_TITLE_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }
}
