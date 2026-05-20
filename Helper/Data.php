<?php

namespace Meetanshi\CookieNotice\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

/**
 * Cookie Notice helper for retrieving module configuration values.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class Data extends AbstractHelper
{
    /**
     * Configuration path for enable/disable setting
     *
     * @var string
     */
    public const ENABLE_DISABLE = 'cookienotice/general/enabledisable';

    /**
     * Configuration path for notice type
     *
     * @var string
     */
    public const TYPE = 'cookienotice/general/type';

    /**
     * Configuration path for bar position
     *
     * @var string
     */
    public const BAR_POSITION = 'cookienotice/general/bar_position';

    /**
     * Configuration path for box position
     *
     * @var string
     */
    public const BOX_POSITION = 'cookienotice/general/box_position';

    /**
     * Configuration path for behaviour
     *
     * @var string
     */
    public const BEHAVIOUR = 'cookienotice/general/behaviour';

    /**
     * Configuration path for auto hide delay
     *
     * @var string
     */
    public const AUTO_HIDE_AFTER = 'cookienotice/general/auto_hide_after';

    /**
     * Configuration path for auto accept
     *
     * @var string
     */
    public const AUTO_ACCEPT = 'cookienotice/general/auto_accept';

    /**
     * Configuration path for cookie expiration
     *
     * @var string
     */
    public const EXPIRE = 'cookienotice/general/expire';

    /**
     * Configuration path for show setting
     *
     * @var string
     */
    public const SHOW = 'cookienotice/content/show';

    /**
     * Configuration path for custom message
     *
     * @var string
     */
    public const CUSTOM_MESSAGE = 'cookienotice/content/custom_message';

    /**
     * Configuration path for model title
     *
     * @var string
     */
    public const MODEL_TITLE = 'cookienotice/content/model_title';

    /**
     * Configuration path for custom accept text
     *
     * @var string
     */
    public const CUSTOM_ACCEPT = 'cookienotice/content/custom_accept';

    /**
     * Configuration path for custom close text
     *
     * @var string
     */
    public const CUSTOM_CLOSE = 'cookienotice/content/custom_close';

    /**
     * Configuration path for custom more info text
     *
     * @var string
     */
    public const CUSTOM_MORE_INFO = 'cookienotice/content/custom_more_info';

    /**
     * Configuration path for new tab setting
     *
     * @var string
     */
    public const NEWTAB = 'cookienotice/content/newtab';

    /**
     * Configuration path for CMS page
     *
     * @var string
     */
    public const CMS_PAGE = 'cookienotice/content/cms_page';

    /**
     * Configuration path for on scroll setting
     *
     * @var string
     */
    public const ONSCROLL = 'cookienotice/general/onscroll';

    /**
     * Configuration path for font family
     *
     * @var string
     */
    public const FONT_FAMILY = 'cookienotice/popup_style/font_family';

    /**
     * Configuration path for text alignment
     *
     * @var string
     */
    public const MODEL_TEXT_ALIGN = 'cookienotice/popup_style/model_text_align';

    /**
     * Configuration path for title font size
     *
     * @var string
     */
    public const MODEL_TITLE_SIZE = 'cookienotice/popup_style/model_title_size';

    /**
     * Configuration path for model border
     *
     * @var string
     */
    public const MODEL_BORDER = 'cookienotice/popup_style/model_border';

    /**
     * Configuration path for footer top border
     *
     * @var string
     */
    public const FOOTER_TOP_BORDER = 'cookienotice/popup_style/continer_top_border';

    /**
     * Configuration path for header bottom border
     *
     * @var string
     */
    public const HEADER_BOTTOM_BORDER = 'cookienotice/popup_style/container_bottom_border';

    /**
     * Configuration path for model border color
     *
     * @var string
     */
    public const MODEL_BORDER_COLOR = 'cookienotice/popup_style/container_border_color';

    /**
     * Configuration path for model message font size
     *
     * @var string
     */
    public const MODEL_MESSAGE_SIZE = 'cookienotice/popup_style/model_message_size';

    /**
     * Configuration path for header background color
     *
     * @var string
     */
    public const HEADER_BACKGROUND_COLOR = 'cookienotice/popup_style/header_background_color';

    /**
     * Configuration path for header font color
     *
     * @var string
     */
    public const HEADER_FONT_COLOR = 'cookienotice/popup_style/header_font_color';

    /**
     * Configuration path for header bottom border color
     *
     * @var string
     */
    public const HEADER_BOTTOM_BORDER_COLOR = 'cookienotice/popup_style/header_bottom_border_color';

    /**
     * Configuration path for footer top border color
     *
     * @var string
     */
    public const FOOTER_TOP_BORDER_COLOR = 'cookienotice/popup_style/footer_top_border_color';

    /**
     * Configuration path for accept button background color
     *
     * @var string
     */
    public const ACCEPT_BUTTON_BACKGROUND_COLOR = 'cookienotice/popup_style/accept_button_background_color';

    /**
     * Configuration path for close button background color
     *
     * @var string
     */
    public const CLOSE_BUTTON_BACKGROUND_COLOR = 'cookienotice/popup_style/close_button_background_color';

    /**
     * Configuration path for policy button background color
     *
     * @var string
     */
    public const POLICY_BACKGROUND_COLOR = 'cookienotice/popup_style/policy_button_background_color';

    /**
     * Configuration path for close button text color
     *
     * @var string
     */
    public const CLOSE_BUTTON_COLOR = 'cookienotice/popup_style/close_button_color';

    /**
     * Configuration path for privacy policy link color
     *
     * @var string
     */
    public const PRIVACY_POLICY_COLOR = 'cookienotice/popup_style/privace_policy_color';

    /**
     * Configuration path for accept button text color
     *
     * @var string
     */
    public const ACCEPT_BUTTON_COLOR = 'cookienotice/popup_style/accept_button_color';

    /**
     * Configuration path for model title color
     *
     * @var string
     */
    public const MODEL_TITLE_COLOR = 'cookienotice/popup_style/model_title_color';

    /**
     * Check if cookie notice is enabled.
     *
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
     * Get cookie notice type (bar or box).
     *
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
     * Get bar position setting.
     *
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
     * Get box position setting.
     *
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
     * Get behaviour setting.
     *
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
     * Get auto hide delay value.
     *
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
     * Get auto accept delay value.
     *
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
     * Get cookie expiration value.
     *
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
     * Get show setting (default or custom).
     *
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
     * Get custom message text.
     *
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
     * Get model title text.
     *
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
     * Get custom accept button text.
     *
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
     * Get custom decline button text.
     *
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
     * Get new tab target setting.
     *
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
     * Get on scroll setting.
     *
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
     * Get custom more info link text.
     *
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
     * Get CMS page identifier.
     *
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
     * Get header text font family.
     *
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
     * Get model text alignment.
     *
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
     * Get model title font size.
     *
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
     * Get model border setting.
     *
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
     * Get container top border setting.
     *
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
     * Get header bottom border setting.
     *
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
     * Get model border color.
     *
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
     * Get model message font size.
     *
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
     * Get header background color.
     *
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
     * Get header font color.
     *
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
     * Get header bottom border color.
     *
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
     * Get container top border color.
     *
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
     * Get accept button background color.
     *
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
     * Get close button background color.
     *
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
     * Get policy button background color.
     *
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
     * Get close button text color.
     *
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
     * Get privacy policy link color.
     *
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
     * Get accept button text color.
     *
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
     * Get model title color.
     *
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
