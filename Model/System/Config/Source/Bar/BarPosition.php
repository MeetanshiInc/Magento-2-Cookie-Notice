<?php

namespace Meetanshi\CookieNotice\Model\System\Config\Source\Bar;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class BarPosition
 * @package Meetanshi\CookieNotice\Model\System\Config\Source\Bar
 */
class BarPosition implements ArrayInterface
{
    /**
     *
     */
    const TOP = 'v-top';
    /**
     *
     */
    const BOTTOM = 'v-bottom';

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => self::TOP, 'label' => __('Top')],
            ['value' => self::BOTTOM, 'label' => __('Bottom')]
        ];
    }
}
