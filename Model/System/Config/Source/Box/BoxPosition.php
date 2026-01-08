<?php

namespace Meetanshi\CookieNotice\Model\System\Config\Source\Box;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class BoxPosition
 * @package Meetanshi\CookieNotice\Model\System\Config\Source\Box
 */
class BoxPosition implements ArrayInterface
{
    /**
     *
     */
    const TOPLEFT = 'v-top-left';
    /**
     *
     */
    const TOPRIGHT = 'v-top-right';
    /**
     *
     */
    const BOTTOMLEFT = 'v-bottom-left';
    /**
     *
     */
    const BOTTOMRIGHT = 'v-bottom-right';
    /**
     *
     */
    const CENTER = 'v-center';

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => self::TOPLEFT, 'label' => __('Top left')],
            ['value' => self::TOPRIGHT, 'label' => __('Top right')],
            ['value' => self::BOTTOMLEFT, 'label' => __('Bottom left')],
            ['value' => self::BOTTOMRIGHT, 'label' => __('Bottom right')],
            ['value' => self::CENTER, 'label' => __('Center')]
        ];
    }
}
