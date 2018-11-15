<?php

namespace Meetanshi\CookieNotice\Model\System\Config\Source\Bar;

use Magento\Framework\Option\ArrayInterface;

class BarPosition implements ArrayInterface
{
    const TOP = 'v-top';
    const BOTTOM = 'v-bottom';

    public function toOptionArray()
    {
        return [
            ['value' => self::TOP, 'label' => __('Top')],
            ['value' => self::BOTTOM, 'label' => __('Bottom')]
        ];
    }
}
